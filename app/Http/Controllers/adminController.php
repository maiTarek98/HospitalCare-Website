<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use DB;

class adminController extends Controller
{
    public function index()
    {
        //$usersNo = DB::table('users')->count();
        

       return view('admin/index');
    }
    
    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect('home');
      }
}
