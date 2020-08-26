<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use DB;
class galleryController extends Controller
{
    public function index()
    {
        $users= Gallery::all();
        return view('admin.gallery.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.gallery.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
               'type'=>'required',
            'photo'=>'required|mimes:jpg,jpeg,gif,png|max:2048',
        ]);
        $img_name=time(). '.' . $request->photo->getClientOriginalExtension();
        $users=new Gallery;
        $users->type=request('type');
        $users->photo=$img_name;
        $users->save();
        $request->photo->move(public_path('Hospital/images'), $img_name);
        return redirect('admin/gallery');
        }

        public function show($id)
    {
        $test=Gallery::find($id);
        return view('admin.gallery.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Gallery::find($id);
         return view('admin.gallery.edit',compact('user'));
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
        
        $user=Gallery::find($id);
        $user->type=$request->input('type');
        if($request->photo == null)
        {
            $request->photo=$user->photo;
        }
        else{
            $img_name=time(). '.' . $request->photo->getClientOriginalExtension();
            $user->photo=$img_name;
            $request->photo->move(public_path('Hospital/images'), $img_name);

        }
        $user->save();
        
        return redirect('admin/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Gallery::find($id);
        $cat->destroy($id);    
        return redirect("admin/gallery");
    }
}
