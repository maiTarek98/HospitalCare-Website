<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use DB;
class teamController extends Controller
{
    public function index()
    {
        $users= Team::all();
        return view('admin.team.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.team.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'name'=>'required',
                'text'=>'required',
                'type'=>'required',
            'image'=>'image|mimes:jpg,jpeg,gif,png|max:2048',
        ]);
        $img_name=time(). '.' . $request->image->getClientOriginalExtension();
        $users=new Team;
        $users->name=request('name');
        $users->text=request('text');
        $users->type=request('type');
        $users->facebook=request('facebook');
        $users->twitter=request('twitter');
        $users->linkedIn=request('linkedIn');

        $users->image=$img_name;
        $users->save();
        $request->image->move(public_path('Hospital/images'), $img_name);
        return redirect('admin/team');
        }

        public function show($id)
    {
        $test=Team::find($id);
        return view('admin.team.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Team::find($id);
         return view('admin.team.edit',compact('user'));
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
        
        $user=Team::find($id);
        $user->name=$request->input('name');
        $user->text=$request->input('text');
        $user->type=$request->input('type');
        $user->facebook=$request->input('facebook');
        $user->twitter=$request->input('twitter');
        $user->linkedIn=$request->input('linkedIn');

        $user->image=$request->input('image');
        $user->save();
        
        return redirect('admin/team');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Team::find($id);
        $cat->destroy($id);    
        return redirect("admin/team");
    }
}
