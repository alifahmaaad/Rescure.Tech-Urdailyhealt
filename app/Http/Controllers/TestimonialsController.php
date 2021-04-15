<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testi;
use File;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testi::all();
        return view('administrators.testimonials.index', compact('testimonials'));
    }

    public function archive()
    {
        $testimonials = Testi::onlyTrashed()->get();
        return view('administrators.testimonials.trash', compact('testimonials'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrators.testimonials.create');
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
            'nama' => 'required',
            'isi' => 'required',
        ]);

        Testi::create([
            'nama' => $request->nama,
            'isi' => $request->isi
        ]);

        return redirect()->back()->with('success', 'Testi created!');
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
        // return 'ini fungsi edit di testi';  
        $testi = Testi::findorfail($id);
        return view('administrators.testimonials.edit', compact('testi'));
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
            'nama' => 'required',
            'isi' => 'required',
        ]);

        Testi::where('id', $id)
        ->update([
            'nama' => $request->nama,
            'isi' => $request->isi,
        ]);

        return redirect()->back()->with('success', 'Testi updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testi::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Testi archived!');
    }

    public function kill($id)
    {
        Testi::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()->with('success', 'testi deleted!');
    }

    public function restore($id)
    {   
        Testi::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('success', 'Testi restored!');
    }
}
