<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use DB;
class sliderController extends Controller
{
    public function index()
    {
        $users= Slider::all();
        return view('admin.slider.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.slider.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'title'=>'required',
            'slidePhoto'=>'required|mimes:jpg,jpeg,gif,png|max:2048',
        ]);
        $img_name=time(). '.' . $request->slidePhoto->getClientOriginalExtension();
        $users=new Slider;
        $users->subTitle=request('subTitle');
        $users->title=request('title');
        $users->text=request('text');
        $users->slidePhoto=$img_name;
        $users->save();
        $request->slidePhoto->move(public_path('Hospital/images'), $img_name);
        return redirect('admin/slider');
        }

        public function show($id)
    {
        $test=Slider::find($id);
        return view('admin.slider.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Slider::find($id);
         return view('admin.slider.edit',compact('user'));
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
        $this->validate(request(),[
            'title'=>'required',
        ]);

        $user=Slider::find($id);
        $user->subTitle=$request->input('subTitle');
        $user->title=$request->input('title');
        $user->text=$request->input('text');
        if($request->slidePhoto == null)
        {
            $request->slidePhoto=$user->slidePhoto;
        }
        else{
            $img_name=time(). '.' . $request->slidePhoto->getClientOriginalExtension();
            $user->slidePhoto=$img_name;
            $request->slidePhoto->move(public_path('Hospital/images'), $img_name);

        }
        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Slider::find($id);
        $cat->destroy($id);    
        return redirect("admin/slider");
    }
}
