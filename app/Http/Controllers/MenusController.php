<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
    public function menucustomer()
    {
        $today = new Carbon();
        if ($today->dayOfWeek == Carbon::SUNDAY) {
            $awal = date('Y-m-d', strtotime('tomorrow'));
            $terakhir = date('Y-m-d', strtotime('+7 days'));
        } elseif ($today->dayOfWeek == Carbon::MONDAY) {
            $awal = date('Y-m-d');
            $terakhir = date('Y-m-d', strtotime('+6 days'));
        } elseif ($today->dayOfWeek == Carbon::TUESDAY) {
            $awal = date('Y-m-d', strtotime('-1 days'));
            $terakhir = date('Y-m-d', strtotime('+5 days'));
        } elseif ($today->dayOfWeek == Carbon::WEDNESDAY) {
            $awal = date('Y-m-d', strtotime('-2 days'));
            $terakhir = date('Y-m-d', strtotime('+4 days'));
        } elseif ($today->dayOfWeek == Carbon::THURSDAY) {
            $awal = date('Y-m-d', strtotime('-3 days'));
            $terakhir = date('Y-m-d', strtotime('+3 days'));
        } elseif ($today->dayOfWeek == Carbon::FRIDAY) {
            $awal = date('Y-m-d', strtotime('-4 days'));
            $terakhir = date('Y-m-d', strtotime('+2 days'));
        } elseif ($today->dayOfWeek == Carbon::SATURDAY) {
            $awal = date('Y-m-d', strtotime('-5 days'));
            $terakhir = date('Y-m-d', strtotime('+1 days'));
        }
        $lunchs = DB::table('menus')->where('type', '=', 'Lunch')->where('deleted_at', '=', null)->whereDate('date', '>=', $awal)->whereDate('date', '<=', $terakhir)->orderBy('date', 'asc')->get();
        $dinners = DB::table('menus')->where('type', '=', 'Dinner')->where('deleted_at', '=', null)->whereDate('date', '>=', $awal)->whereDate('date', '<=', $terakhir)->orderBy('date', 'asc')->get();


        return view('customers.menu.index', compact(['lunchs', 'dinners']));
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
        switch($request->day){
            case "Senin":
                $dayInEng = 'Mon';
                break;
            case "Selasa":
                $dayInEng = 'Tue';
                break;
            case "Rabu":
                $dayInEng = 'Wed';
                break;
            case "Kamis":
                $dayInEng = 'Thu';
                break;
            case "Jum'at":
                $dayInEng = 'Fri';
                break;
            case "Sabtu":
                $dayInEng = 'Sat';
                break;
            case "Minggu":
                $dayInEng = 'Sun';
                break;
        }
        $dateDayName = date('D', strtotime($request->date));
        if($dateDayName != $dayInEng){
            return redirect()->back()->with('failed', 'Date and Day must match!');
        }
        else{
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

        switch($request->day){
            case "Senin":
                $dayInEng = 'Mon';
                break;
            case "Selasa":
                $dayInEng = 'Tue';
                break;
            case "Rabu":
                $dayInEng = 'Wed';
                break;
            case "Kamis":
                $dayInEng = 'Thu';
                break;
            case "Jum'at":
                $dayInEng = 'Fri';
                break;
            case "Sabtu":
                $dayInEng = 'Sat';
                break;
            case "Minggu":
                $dayInEng = 'Sun';
                break;
        }
        $dateDayName = date('D', strtotime($request->date));
        if($dateDayName != $dayInEng){
            return redirect()->back()->with('failed', 'Date and Day must match!');
        }
        else{
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
