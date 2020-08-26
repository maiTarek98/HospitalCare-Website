<?php

namespace App\Http\Controllers;
use App\Setting;
use Illuminate\Http\Request;
use DB;
class settingController extends Controller
{
    public function index()
    {
        $users= Setting::all();
        return view('admin.setting.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.setting.create');
    }
    public function store(Request $request)
    {
    
        $users=new Setting;
        $users->location=request('location');
        $users->phone=request('phone');
        $users->otherPhone=request('otherPhone');
        $users->email=request('email');
        $users->otherEmail=request('otherEmail');
        $users->site=request('site');

        $users->save();
        return redirect('admin/setting');
        }

        public function show($id)
    {
        $test=Setting::find($id);
        return view('admin.setting.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Setting::find($id);
         return view('admin.setting.edit',compact('user'));
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
        
        $user=Setting::find($id);
        $user->location=$request->input('location');
        $user->phone=$request->input('phone');
        $user->otherPhone=$request->input('otherPhone');
        $user->email=$request->input('email');
        $user->otherEmail=$request->input('otherEmail');
        $user->site=$request->input('site');

        $user->save();
        
        return redirect('admin/setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Setting::find($id);
        $cat->destroy($id);    
        return redirect("admin/setting");
    }
}
