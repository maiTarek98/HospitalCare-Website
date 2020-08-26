<?php

namespace App\Http\Controllers;

use App\Chosen;
use Illuminate\Http\Request;
use DB;
class chosenController extends Controller
{
    public function index()
    {
        $users= Chosen::all();
        return view('admin.chosen.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.chosen.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'title'=>'required',
                'text'=>'required',
        ]);
        $users=new Chosen;
        $users->title=request('title');
        $users->text=request('text');
        $users->save();
        return redirect('admin/chosen');
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
         $user=Chosen::find($id);
         return view('admin.chosen.edit',compact('user'));
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
        
        $user=Chosen::find($id);
        $user->title=$request->input('title');
        $user->text=$request->input('text');
        $user->save();
        
        return redirect('admin/chosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Chosen::find($id);
        $cat->destroy($id);    
        return redirect("admin/chosen");
    }
}
