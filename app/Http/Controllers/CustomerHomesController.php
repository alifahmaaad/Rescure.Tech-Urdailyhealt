<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomerHomesController extends Controller
{
    public function index()
    {

        $articles = Article::all()->take(2);
        $lunchs = DB::table('menus')->where('type', '=', 'Lunch')->whereDate('date', '=', date('Y-m-d', strtotime('tomorrow')))->take(1)->get();
        $dinners = DB::table('menus')->where('type', '=', 'Dinner')->whereDate('date', '=', date('Y-m-d', strtotime('tomorrow')))->take(1)->get();
        $testi = DB::table('testi')->get();

        return view('customers.home.index', compact(['articles', 'lunchs', 'dinners', 'testi']));
    }
}
