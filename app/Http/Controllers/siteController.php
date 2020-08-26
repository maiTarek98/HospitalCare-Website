<?php

namespace App\Http\Controllers;
use App\Booking;
use App\Chosen;
use App\Contact;
use App\Contactform;
use App\Health;
use App\Opening;
use App\Openion;
use App\Profile;
use App\Section;
use App\Service;
use App\Setting;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use App\Team;
use Session;
use DB;

class siteController extends Controller
{
    public function index(Request $request)
    {
        $slider=Slider::all();
        $section=Section::all();
        $chosen=Chosen::all();
        $users=Team::all();
        $service=Service::all();
        $health=Health::all();
        $openion=Openion::all();
        $booking=Booking::all();
        $setting=Setting::all();
        $open=Opening::all();

        if($request->has('search')){
    		$users = Team::search($request->get('search'))->get();	
    	}else{
    		$users = Team::get();
    	}

        return view('Hospital.index',compact('slider','chosen','section','users','service','health','openion','booking','open','setting','users'));
    }
    public function about()
    {
        $section=Section::all();
        $chosen=Chosen::all();
        $users=Team::all();
        $service=Service::all();
        $health=Health::all();
        $openion=Openion::all();
        $setting=Setting::all();
        $open=Opening::all();

        return view('Hospital.about',compact('chosen','section','users','service','health','openion','open','setting'));
    }
    public function service()
    {
        $chosen=Chosen::all();
        $users=Team::all();
        $service=Service::all();
        $health=Health::all();
        $openion=Openion::all();
        $booking=Booking::all();
        $setting=Setting::all();
        $open=Opening::all();

        return view('Hospital.service',compact('chosen','users','service','health','openion','booking','open','setting'));
    }

    public function team()
    {
        $setting=Setting::all();
        $users=Team::all();
        return view('Hospital.team',compact('users','setting'));
    }
    public function contact()
    {
        $setting=Setting::all();
        $contact=Contact::all();
        $contactForm=Contactform::all();
        return view('Hospital.contact',compact('contact','contactForm','setting'));
    }
    public function gallery()
    {
        $paginate=DB::table('galleries')->paginate(5);
        $setting=Setting::all();
        return view('Hospital.gallery',compact('paginate','setting'));
    }
    // public function search(Request $request)
    // {
    //     if($request->has('search')){
    // 		$users = User::search($request->get('search'))->get();	
    // 	}else{
    // 		$users = User::get();
    // 	}


    // 	return view('hospital.index', compact('users'));
    // //     $res=User::search($ss)->get();
    // //    return view('Hospital.search', compact('res'));
    // }
    public function signup()
    {
        $setting=Setting::all();
        $signup=User::all();
        return view('Hospital.signup',compact('signup','setting'));
    }
    public function show($id)
    {
        $setting=Setting::all();
        $test=User::all()->where('id',$id); 
        return view('Hospital.profile',compact('test','setting'));
    }

    public function create()
    {
        return view('Hospital.signup');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
                'name'=>'required',
                'birth'=>'required',
                'email'=>'required',
                'password'=>'required',
                'retype'=>'required',
                'position'=>'required',
                'phone'=>'required',
                'address'=>'required',

        ]);
        $users=new User;
        $users->name=request('name');
        $users->birth=request('birth');
        $users->email=request('email');
        $users->password=bcrypt(request('password'));
        $users->retype=bcrypt(request('retype'));
        $users->position=request('position');
        $users->type=request('type');
        $users->expr=request('expr');
        $users->office=request('office');
        $users->work=request('work');
        $users->phone=request('phone');
        $users->facebook=request('facebook');
        $users->twitter=request('twitter');
        $users->linkedIn=request('linkedIn');
        $users->address=request('address');

        $users->save();
        // auth()->login($users);

        return back();

    }

//////////////////
//public function createContact()
//{
//    return view('Hospital.contact');
//}

public function storeContact(Request $request)
{
    $this->validate(request(),[
            'fullname'=>'required',
            'subject'=>'required',
            'email'=>'required',
            'phone'=>'required',

    ]);
    $users=new Contactform;
    $users->fullname=request('fullname');
    $users->email=request('email');
    $users->phone=request('phone');
    $users->subject=request('subject');
    $users->message=request('message');

    $users->save();
   return back();

}

    ///////////////

    public function createBooking()
    {
        return view('Hospital.index');
    }
    public function storeBooking(Request $request)
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
        return back();
        }

   ////
//    public function login()
//     {
//        return view('Hospital.index');
//     }
    public function signin()
    {
       if(! ( auth()->attempt(request(['email','password'])) )  )
       {
           return back()->withErrors(['massage '=> 'email or password incorrect',
           
           ]);
       }
       
       return back();

    }

    public function destroy()
    {
        auth()->logout();
        return back();
    }
}
