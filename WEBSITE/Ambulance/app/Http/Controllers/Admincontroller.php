<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\bookamb;
use App\Models\contact;
use App\Models\drivers;
use App\Models\feedback;
use Illuminate\Http\Request;
use App\Models\appointmentmodel;
use App\Models\ambulanceservices;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class Admincontroller extends Controller
{
    public function insertdrivers(Request $req)
{ 
    $mydata = new drivers();
    $mydata->Name =$req ->name;
        $mydata->Email = $req->email;
        $mydata->Status = $req->status;
        $mydata->Phone = $req->phone;
        $mydata->Password = $req->pass;
        $myimage =  $req->file('profile');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/img/',$number);
       $mydata->Profile = $abc;
       $mydata->save();
       return redirect()->back()->with(["insertdri"=>"Record Submitted"]);
}
public function viewDriverforuser()
{
   $pro = drivers::all();
    return view('team',compact("pro"));
}
public function dataDriver()
{
    $viewdriver = drivers::all();
    return view('Driverdata',compact("viewdriver"));
}
public function deletedriverrecord($recid)
{
    $mydata = drivers::find($recid);
    $mydata->delete();
    return redirect()->back();
}
//feeedbackwork
public function insertreview(Request $feedback)
{
    $feedback->validate ([
        "name" => "required",
        "service" => "required",
        "feedback"=>"required", 
    ]);
    $mydata = new feedback();
    $mydata->name =$feedback ->name;
    $mydata->service =$feedback ->service;
    $mydata->feedback =$feedback ->feedback;
    $mydata->save();
    return redirect()->back()->with(["FEEDBACKMESSAGE"=>"Record Submitted"]);
}
public function showfeedback()
{
    $view = feedback::all();
    return view('showfeedback',compact("view"));
}
public function showfeedbackforadmin()
{
    $view = feedback::all();
    return view('showfeedforadmin',compact("view"));
}
public function showfeedbackfordriver()
{
    $view = feedback::all();
    return view('DriverFeedback',compact("view"));
}
public function showfeedbackforuser()
{
    $fee = feedback::all();
    return view('testimonials',compact("fee"));
}
public function showfeedbackforabout()
{
    $fee = feedback::all();
    $dri = drivers::all();
    return view('about',compact("fee","dri"));
}
//driverlogin
public function driverlogin(Request $req)
    {
        $req->validate ([
            "email" => "required",
            "pass"=>"required",
        ]);
        $email=$req->email;
        $password=$req->pass;
        $Login=DB::table("drivers")->where(["Email"=>$email,"Password"=> $password])->first();
        if($Login!="")
        {
            return view("drivedashboard");
        }
        else{
            return redirect()->back()->with(["recep"=>"Incorrect Information"]);
        }
    }
    //contact
    public function insertcontact (Request $contact)
    {
        $contact->validate ([
            "name" => "required",
            "email" => "required",
            "phone"=>"required",
            "subject"=>"required",
            "message"=>"required",
        ]);
        $mydata = new contact();
        $mydata->Full_Name =$contact ->name;
        $mydata->Email =$contact ->email;
        $mydata->Phone =$contact ->phone;
        $mydata->Subject =$contact ->subject;
        $mydata->Message =$contact ->message;
        $mydata->save();
        return redirect()->back()->with(["CONTACTMESSAGE"=>"Record Submitted"]);
}
public function showcontact()
{
    $con = contact::all();
    return view('ContactRecord',compact("con"));
}
public function showcontactforuser()
{
    $con = contact::all();
    return view('UserContactRecord',compact("con"));
}
public function deletecontactrecord($contactid)
{
    $mydata = contact::find($contactid);
    $mydata->delete();
    return redirect()->back();
}
public function deletecontactrecordforuser($contactid)
{
    $mydata = contact::find($contactid);
    $mydata->delete();
    return redirect()->back();
}
public function fetchsignup()
{
    $abc = User::all();
    return view('userdata',compact("abc"));
}
public function deletesignuprecord($signupid)
    {
        $mydata = User::find($signupid);
        $mydata->delete();
        return redirect()->back();
    }
    public function updatesignuprecord($signupid)
    {
        $mydata = User::find($signupid);
        return view('userupdate',compact("mydata"));    
    }
    public function adminupdatedrecord($signupid, Request $req)
    {
        $data = User::find($signupid);  
       
        $data->role= $req->role; 
     
        $data->update();
        $abc = User::all();
        return view('userdata',compact("abc"));
    }
    public function insertambulance(Request $date)
    {
        $date->validate ([
            "form_name" => "required",
            "form_email" => "required",
            "form_date"=>"required",
            "form_time"=>"required",
            "form_phone"=>"required",
            "form_driver"=>"required",
            "form_address"=>"required",
            "form_cond"=>"required",
        ]);
        $mydata = new bookamb();
        $mydata->Full_name = $date->form_name;
        $mydata->Email = $date->form_email;
        $mydata->Date = $date->form_date;
        $mydata->Time = $date->form_time;
        $mydata->Phone = $date->form_phone;
        $mydata->Drivers = $date->form_driver;
        $mydata->Address = $date->form_address;  
        $trackingidforambulance = rand();  
        $mydata->Tracking_id = $trackingidforambulance;
        $mydata->Condition = $date->form_cond;
        $mydata->save();
        return redirect()->back()->with(["bookingmessage"=>"Record Submitted" , "track_id" =>  $trackingidforambulance]);
    }
public function fetchbooking()
{
    $ambrecord = bookamb::all();
    return view('bookfetch',compact("ambrecord"));
}
public function fetchbookingfordriver()
{
    $ambrecord = bookamb::all();
    return view('BookingData',compact("ambrecord"));
}
public function updatebookingrecord($bookid)
    {
        $mydata = bookamb::find($bookid);
        return view('bookupdate',compact("mydata"));
        
    }
    public function adminbookupdate($bookid, Request $req)
    {
        $mydata = bookamb::find($bookid);  
        $mydata->Full_name= $req->form_name; 
        $mydata->Email= $req->form_email; 
        $mydata->Drivers= $req->form_driver; 
        $mydata->Status =$req ->form_status;
        $mydata->update();
        $ambrecord = bookamb::all();
        return view('bookfetch',compact("ambrecord"));
    }
    public function userambdata()
{
   $mydata = bookamb::all();
    return view('ambfilter' , compact("mydata"));
}
public function usersearch(Request $sea)
{
    $userdata = $sea->usersearch;
    if($userdata != "")
        {
            // Search Here
    $ext = "%" . $userdata . "%";
    $mydata = bookamb::where("Full_name", $userdata)->get();
    return view("ambsearchdata",compact("mydata"));
        }
        else
        {
    
        }
}
public function insertamblanceservice(Request $req)
{    
        $mydata = new ambulanceservices();
        $mydata->Name =$req ->name;
        $mydata->Ambulanceno = $req->ambulanceno;
        $mydata->Hospitalname = $req->hospital;
        $mydata->Phone = $req->phone;
        $mydata->Drivername = $req->drivername;
        $myimage =  $req->file('profile');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/img/',$number);
       $mydata->Profile = $abc;
       $mydata->save();
       return redirect()->back()->with(["insertambulanceservices"=>"Record Submitted"]);
}
public function viewambulanceforuser()
{
   $vie = ambulanceservices::all();
    return view('ambulanceservice',compact("vie"));
}
public function viewambulanceforadmin()
{
   $fac = ambulanceservices::all();
    return view('servicefetch',compact("fac"));
}
public function viewambulanceforindex()
{
   $fac = ambulanceservices::all();
   $viewblog = blogs::all();
    return view('index',compact("fac","viewblog"));
}
public function insertblogs(Request $req)
{ 
    $mydata = new blogs();
        $mydata->Author_Name =$req ->author;
        $mydata->Date = $req->date;
        $mydata->Blog_Title = $req->title;
        $myimage =  $req->file('Profile');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/img/',$number);
       $mydata->Profile = $abc;
       $mydata->save();
       return redirect()->back()->with(["insertblo"=>"Record Submitted"]);
}
public function blogdata()
{
    $viewdriver = blogs::all();
    return view('ViewBlog',compact("viewdriver"));
}
public function deleteblogrecord($recid)
{
    $mydata = blogs::find($recid);
    $mydata->delete();
    return redirect()->back();
}
public function fetchtrack()
{
    $track = bookamb::all();
    return view('tracking',compact("track"));
}
public function webtrack()
{
   $track = bookamb::all();
    return view('tracking' , compact("track"));
}
public function websearch(Request $sea)
{
    $userdata = $sea->usersearch;
    if($userdata != "")
        {
            // Search Here
    $ext = "%" . $userdata . "%";
    $track = bookamb::where("Tracking_id", $userdata)->get();
    return view("tracksearchdata",compact("track"));
        }
        else
        {
    
        }
}
}
