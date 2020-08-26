<?php

namespace App\Http\Controllers;
use App\Opening;
use Illuminate\Http\Request;
use DB;
class openingController extends Controller
{
    public function index()
    {
        $users= Opening::all();
        return view('admin.opening.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.opening.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'week'=>'required',
                'from'=>'required',
                'to'=>'required',
        ]);
        $users=new Opening;
        $users->week=request('week');
        $users->from=request('from');
        $users->to=request('to');
        $users->save();
        return redirect('admin/opening');
        }

        public function show($id)
    {
        $test=Opening::find($id);
        return view('admin.opening.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Opening::find($id);
         return view('admin.opening.edit',compact('user'));
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
        
        $user=Opening::find($id);
        $user->week=$request->input('week');
        $user->from=$request->input('from');
        $user->to=$request->input('to');

        $user->save();
        
        return redirect('admin/opening');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Opening::find($id);
        $cat->destroy($id);    
        return redirect("admin/opening");
    }
}
