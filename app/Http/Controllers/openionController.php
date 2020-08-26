<?php

namespace App\Http\Controllers;

use App\Openion;
use Illuminate\Http\Request;
use DB;
class openionController extends Controller
{
    public function index()
    {
        $users= Openion::all();
        return view('admin.openion.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.openion.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'doctorName'=>'required',
                'patientName'=>'required',
                'text'=>'required',
            'image'=>'image|mimes:jpg,jpeg,gif,png|max:2048',
            'country'=>'required',

        ]);
        $img_name=time(). '.' . $request->image->getClientOriginalExtension();
        $users=new Openion;
        $users->doctorName=request('doctorName');
        $users->patientName=request('patientName');
        $users->text=request('text');
        $users->country=request('country');
        $users->image=$img_name;
        $users->save();
        $request->image->move(public_path('Hospital/images'), $img_name);
        return redirect('admin/openion');
        }

        public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Openion::find($id);
         return view('admin.openion.edit',compact('user'));
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
        
        $user=Openion::find($id);
        $user->doctorName=$request->input('doctorName');
        $user->patientName=$request->input('patientName');
        $user->text=$request->input('text');
        $user->country=$request->input('country');
        $user->image=$request->input('image');
        $user->save();
        
        return redirect('admin/openion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Openion::find($id);
        $cat->destroy($id);    
        return redirect("admin/openion");
    }
}
