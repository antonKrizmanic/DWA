<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Log;


class HomeController extends Controller
{
    public function index()
    {
        \App::setLocale(session()->get('locale'));
        return view('home');
    }

    public function getUserReservationsView(Request $request){
        \App::setLocale(session()->get('locale'));
        return view('user.reservations');
    }  
    public function changeLanguage($id){
        $locale = "";
        if($id == "en"){            
            Session::set('locale', 'en');
        }
        if($id == "hr"){        	
            Session::set('locale', 'hr');
        }
        Log::info(session()->get('locale'));
        
        return redirect()->back();
    }  
}
