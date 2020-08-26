<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use DB;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users=DB::table('users')->get();         
        return view('admin.user.index',compact('users'));

    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [

            'name'    => 'required|min:3',
            'email'  => 'required',
            'password'  => 'required',
            'role'  => 'required',

          ],
    
          [
    
    
            'name.required'    => 'write your name',
            'email.required'  => 'write your email',
            'password.required'  => 'write your passowrd',
            'role.required'  => 'write your role',

          ]);
        $users= new User;
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password= bcrypt($request->password);
        $users->role= $request->role;

        $users->save();

        Session::flash('save','Your data has been recorded');
        return redirect('admin/user');
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
         $user=User::find($id);
         return view('admin.user.edit',compact('user'));
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
        
        $user=User::find($id);

        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));

        $user->save();
        return redirect('admin/user');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test= User::find($id);
        $test->destroy($id);    
        return redirect("admin/user");
    }
}
