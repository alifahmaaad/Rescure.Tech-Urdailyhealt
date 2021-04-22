<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('administrators.menus.index', compact('menus'));
    }

    public function archive()
    {
        $menus = Menu::onlyTrashed()->get();
        return view('administrators.menus.trash', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrators.menus.create');
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
            'menu' => 'required',
            'day' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'date' => 'required'
        ]);

        Menu::create([
            'menu' => $request->menu,
            'day' => $request->day,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'date' => $request->date
        ]);

        return redirect()->back()->with('success', 'Menu created!');
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
        $menu = Menu::findorfail($id);
        return view('administrators.menus.edit', compact('menu'));
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
            'menu' => 'required',
            'day' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'date' => 'required'
        ]);

        Menu::where('id', $id)
        ->update([
            'menu' => $request->menu,
            'day' => $request->day,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'date' => $request->date
        ]);

        return redirect()->back()->with('success', 'Menu updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Menu archived!');
    }

    public function kill($id)
    {
        Menu::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()->with('success', 'Menu deleted!');
    }

    public function restore($id)
    {
        Menu::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('success', 'Menu restored!');
    }
}
