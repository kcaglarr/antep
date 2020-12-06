<?php


namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function showView() {
        //$users = DB::table('users')->get();
        $users = User::all();
        return view('hakkimda', compact('users'));
    }
}
