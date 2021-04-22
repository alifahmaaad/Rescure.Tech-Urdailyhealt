<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('administrators.articles.index', compact('articles'));
    }

    public function costumerindex()
    {
        $articles = Article::all();
        return view('customers.article.index', compact('articles'));
    }
    public function showarticle($id)
    {
        $articles = Article::findorfail($id);
        return view('customers.article.showarticle', compact('articles'));
    }

    public function archive()
    {
        $articles = Article::onlyTrashed()->get();
        return view('administrators.articles.trash', compact('articles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrators.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'thumbnail' => 'required',
            'content' => 'required'
        ]);
        $article = Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author' => $request->author,
            'thumbnail' => $request->file('thumbnail')->move('uploads/articles', Str::slug($request->title) . '_' . $request->file('thumbnail')->getClientOriginalName()),
            'content' => str_replace('&nbsp;', ' ', $request->content)
        ]);

        return redirect()->back()->with('success', 'Article created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findorfail($id);
        return view('administrators.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required'
        ]);

        if ($request->thumbnail) {
            $thumbnail = Article::withTrashed()->where('id', $id)->get('thumbnail');
            $file = public_path('/') . $thumbnail[0]->thumbnail;
            if (file_exists($file)) {
                @unlink($file);
            }
            Article::where('id', $id)->update([
                'thumbnail' => $request->file('thumbnail')->move('uploads/articles', Str::slug($request->title) . '_' . $request->file('thumbnail')->getClientOriginalName())
            ]);
        }

        Article::where('id', $id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author' => $request->author,
            'content' => str_replace('&nbsp;', ' ', $request->content)
        ]);

        return redirect()->back()->with('success', 'Article updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Article archived!');
    }
    public function kill($id)
    {
        $thumbnail = Article::onlyTrashed()->where('id', $id)->get('thumbnail');
        $file = public_path('/') . $thumbnail[0]->thumbnail;
        if (file_exists($file)) {
            @unlink($file);
        }
        Article::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()->with('success', 'Article deleted!');
    }
    public function restore($id)
    {
        Article::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('success', 'Article restored!');
    }
}
