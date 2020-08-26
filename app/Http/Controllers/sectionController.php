<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use DB;
class sectionController extends Controller
{
    public function index()
    {
        $users= Section::all();
        return view('admin.section.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.section.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'sectionTitle'=>'required',
                'sectionText'=>'required',
                'bgImage'=>'image|mimes:jpg,jpeg,gif,png|max:2048',
        ]);
        $img_name=time(). '.' . $request->bgImage->getClientOriginalExtension();
        $users=new Section;
        $users->sectionTitle=request('sectionTitle');
        $users->sectionText=request('sectionText');
        $users->bgImage=$img_name;
        $users->save();
        $request->bgImage->move(public_path('Hospital/images'), $img_name);
        return redirect('admin/section');
        }

        public function show($id)
    {
        $test=Section::find($id);
        return view('admin.section.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Section::find($id);
         return view('admin.section.edit',compact('user'));
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
        
        $user=Section::find($id);
        $user->sectionTitle=$request->input('sectionTitle');
        $user->sectionText=$request->input('sectionText');
        $user->bgImage=$request->input('bgImage');

        $user->save();
        
        return redirect('admin/section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Section::find($id);
        $cat->destroy($id);    
        return redirect("admin/section");
    }
}
