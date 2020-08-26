<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use DB;
class contactController extends Controller
{
    public function index()
    {
        $users= Contact::all();
        return view('admin.contact.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.contact.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'title'=>'required',
                'info'=>'required',
                'icon'=>'required',

        ]);
        $users=new Contact;
        $users->title=request('title');
        $users->info=request('info');
        $users->icon=request('icon');
        $users->other=request('other');

        $users->save();
        return redirect('admin/contact');
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
         $user=Contact::find($id);
         return view('admin.contact.edit',compact('user'));
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
        
        $user=Contact::find($id);
        $user->title=$request->input('title');
        $user->info=$request->input('info');
        $user->icon=$request->input('icon');
        $user->other=$request->input('other');

        $user->save();
        
        return redirect('admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Contact::find($id);
        $cat->destroy($id);    
        return redirect("admin/contact");
    }
}
