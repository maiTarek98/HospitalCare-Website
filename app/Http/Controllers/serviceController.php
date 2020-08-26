<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;
use DB;
class serviceController extends Controller
{
    public function index()
    {
        $users= Service::all();
        return view('admin.service.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.service.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'title'=>'required',
                'text'=>'required',
                'icon'=>'required',
        ]);
        $users=new Service;
        $users->title=request('title');
        $users->text=request('text');
        $users->icon=request('icon');
        $users->save();
        return redirect('admin/service');
        }

        public function show($id)
    {
        $test=Service::find($id);
        return view('admin.service.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Service::find($id);
         return view('admin.service.edit',compact('user'));
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
        
        $user=Service::find($id);
        $user->title=$request->input('title');
        $user->text=$request->input('text');
        $user->icon=$request->input('icon');

        $user->save();
        
        return redirect('admin/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Service::find($id);
        $cat->destroy($id);    
        return redirect("admin/service");
    }
}
