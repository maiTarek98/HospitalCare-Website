<?php

namespace App\Http\Controllers;

use App\Health;
use Illuminate\Http\Request;
use DB;
class healthController extends Controller
{
    public function index()
    {
        $users= Health::all();
        return view('admin.health.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.health.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'title'=>'required',
                'text'=>'required',
            'icon'=>'required',
        ]);
        $users=new Health;
        $users->title=request('title');
        $users->text=request('text');
        $users->icon=request('icon');
        $users->save();
        return redirect('admin/health');
        }

        public function show($id)
    {
        $test=Health::find($id);
        return view('admin.health.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Health::find($id);
         return view('admin.health.edit',compact('user'));
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
        
        $user=Health::find($id);
        $user->title=$request->input('title');
        $user->text=$request->input('text');
        $user->icon=$request->input('icon');
        $user->save();
        
        return redirect('admin/health');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Health::find($id);
        $cat->destroy($id);    
        return redirect("admin/health");
    }
}
