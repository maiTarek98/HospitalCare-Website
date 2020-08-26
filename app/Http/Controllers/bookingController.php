<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use DB;
class bookingController extends Controller
{
    public function index()
    {
        $users= Booking::all();
        return view('admin.booking.index',compact('users'));
    }
  
    public function create()
    {
        return view('admin.team.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
                'firstName'=>'required',
                'lastName'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'service'=>'required',
                'date'=>'required',
                'time'=>'required',
        ]);
        $users=new Booking;
        $users->firstName=request('firstName');
        $users->lastName=request('lastName');
        $users->email=request('email');
        $users->phone=request('phone');
        $users->gender=request('gender');
        $users->service=request('service');
        $users->date=request('date');
        $users->time=request('time');
        $users->message=request('message');
        $users->save();
        return redirect('admin/booking');
        }

        public function show($id)
    {
        $test=Booking::find($id);
        return view('admin.booking.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Booking::find($id);
         return view('admin.booking.edit',compact('user'));
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
        $user=Booking::find($id);
        $user->firstName=$request->input('firstName');
        $user->lastName=$request->input('lastName');
        $user->email=$request->input('email');
        $user->phone=$request->input('phone');
        $user->gender=$request->input('gender');
        $user->service=$request->input('service');
        $user->date=$request->input('date');
        $user->time=$request->input('time');
        $user->message=$request->input('message');
        $user->save();
        
        return redirect('admin/booking');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Booking::find($id);
        $cat->destroy($id);    
        return redirect("admin/booking");
    }
}
