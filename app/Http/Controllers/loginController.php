<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function create()
    {
       return view('login');
    }
    public function store()
    {
       if(! ( auth()->attempt(request(['email','password'])) )  )
       {
           return back()->withErrors(['massage '=> 'email or password incorrect',
           
           ]);
       }
       
       return redirect('admin');

    }

    public function destroy()
    {
        auth()->logout();
        return redirect('login');
    }
}
