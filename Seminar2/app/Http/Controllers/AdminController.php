<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
{
    public function getData(Request $request){

        \App::setLocale(session()->get('locale'));
        return view('admin.data');
    }

    public function getCarsView(Request $request){

        \App::setLocale(session()->get('locale'));
        return view('admin.cars');
    }
    
    public function getMakesModelsView(Request $request){

        \App::setLocale(session()->get('locale'));
        return view('admin.makes');
    }

    public function getBranchesCitiesView(Request $request){

        \App::setLocale(session()->get('locale'));
        return view('admin.branches');
    }
    
    public function getFuelsView(Request $request){

        \App::setLocale(session()->get('locale'));
        return view('admin.fuels');
    }
    
    public function getExtrasView(Request $request){
        \App::setLocale(session()->get('locale'));
        return view('admin.extras');
    }
    
    public function getClassesView(Request $request){
        \App::setLocale(session()->get('locale'));
        return view('admin.classes');
    }
    
    public function getReservationsView(){
        \App::setLocale(session()->get('locale'));
        return view("admin.reservations");
    }
}
