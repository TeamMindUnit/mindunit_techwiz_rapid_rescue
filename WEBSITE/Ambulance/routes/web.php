<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Admincontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('team', function () {
    return view('team');
});

Route::get('testimonials', function () {
    return view('testimonials');
});

Route::get('ambulanceservice', function () {
    return view('ambulanceservice');
});
Route::get('driver', function () {
    return view('AddDrivers');
});
Route::get('driverdata', function () {
    return view('Driverdata');
});
Route::get('feedback', function () {
    return view('feedback');
});
Route::get('show', function () {
    return view('showfeedback');
});
Route::get('showf', function () {
    return view('showfeedforadmin');
});
Route::get('driverlogin', function () {
    return view('driverlogin');
});

Route::get('fetchcontact', function () {
    return view('ContactRecord');
});
Route::get('fetchusercontact', function () {
    return view('UserContactRecord');
});
Route::get('fetchuser', function () {
    return view('userdata');
});
Route::get('bookambulanceview', function () {
    return view('bookambulance');
});
Route::get('bookf', function () {
    return view('bookfetch');
});
Route::get('showfeedback', function () {
    return view('DriverFeedback');
});
Route::get('addambulance', function () {
    return view('AddAmbulance');
});
Route::get('blogs', function () {
    return view('AddBlogs');
});
Route::get('ViewBlog', function () {
    return view('ViewBlogs');
});
Route::get('tracking', function () {
    return view('tracking');
});

// Route::get('checkout', function () {
//     return view('checkout');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role == 0)
        {
            return view('dashboard');
        }
         else if(Auth::User()->role == 1)
         {
             return view('userscreen');
         }
        else
        {
            return view('index');
        }
        
    })->name('dashboard');
});


//Logout
Route::get('/logout',[Authcontroller::class,('logout')]);
//drivers
Route::post('/driversinserted', [Admincontroller::class, ('insertdrivers')]); 
Route::get('team', [Admincontroller::class, ('viewDriverforuser')]);
Route::get('driverdata', [Admincontroller::class, ('dataDriver')]);
Route::get('/driverdelete/{recid}', [Admincontroller::class, ('deletedriverrecord')]);
Route::post('/driverlogin', [Admincontroller::class, ('driverlogin')]);
Route::get('about', [Admincontroller::class, ('showfeedbackforabout')]);
//feedback 
Route::post('/reviewinsert', [Admincontroller::class, ('insertreview')]);
Route::post('/reviewinsert', [Admincontroller::class, ('insertreview')]);
Route::get('show', [Admincontroller::class, ('showfeedback')]);
Route::get('showf', [Admincontroller::class, ('showfeedbackforadmin')]);
Route::get('testimonials', [Admincontroller::class, ('showfeedbackforuser')]);
Route::get('about', [Admincontroller::class, ('showfeedbackforabout')]);
Route::get('showfeedback', [Admincontroller::class, ('showfeedbackfordriver')]);
//contact
Route::post('/contactinsert', [Admincontroller::class, ('insertcontact')]);
Route::get('fetchcontact', [Admincontroller::class, ('showcontact')]);
Route::get('fetchusercontact', [Admincontroller::class, ('showcontactforuser')]);
Route::get('/contactdelete/{contactid}', [Admincontroller::class, ('deletecontactrecord')]);
Route::get('/contactdeleteforuser/{contactid}', [Admincontroller::class, ('deletecontactrecordforuser')]);

//signuprecord
Route::get('/fetchuser', [Admincontroller::class, ('fetchsignup')]);
Route::get('/signupdelete/{signupid}', [admincontroller::class, ('deletesignuprecord')]);
Route::get('/signupupdate/{signupid}', [admincontroller::class, ('updatesignuprecord')]);
Route::post('/admindataupdated/{signupid}', [admincontroller::class, ('adminupdatedrecord')]);

//book ambulance
Route::post('/bookambulanceinserted', [Admincontroller::class, ('insertambulance')]);
Route::get('bookf', [admincontroller::class, ('fetchbooking')]);
Route::get('/adminbookupdate/{bookid}', [admincontroller::class, ('updatebookingrecord')]);
Route::post('/adminbookupdate/{bookid}', [admincontroller::class, ('adminbookupdate')]);
Route::get('showbooking', [admincontroller::class, ('fetchbookingfordriver')]);
Route::get('tracking', [admincontroller::class, ('fetchtrack')]);

//Search
Route::post('/userfilterdata', [admincontroller::class, ('usersearch')]);
Route::get('/search', [admincontroller::class, ('userambdata')]);

//search tracking id 
Route::post('/filterdata', [admincontroller::class, ('websearch')]);
Route::get('/tracking', [admincontroller::class, ('webtrack')]);

///ambulance service
Route::post('/ambulanceinserted', [Admincontroller::class, ('insertamblanceservice')]); 
Route::get('/ambulanceservice', [Admincontroller::class, ('viewambulanceforuser')]);
Route::get('/servicef', [Admincontroller::class, ('viewambulanceforadmin')]);
Route::get('/', [Admincontroller::class, ('viewambulanceforindex')]);

//blogs route
Route::post('/blogsinserted', [Admincontroller::class, ('insertblogs')]); 
Route::get('ViewBlog', [Admincontroller::class, ('blogdata')]);
Route::get('/blogdelete/{recid}', [Admincontroller::class, ('deleteblogrecord')]);
