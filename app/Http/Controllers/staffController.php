<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staffController extends Controller
{
    public function index(){
        return view('pages.staffs.index');
    }
    public function personalInfo(){
        return view('pages.staffs.layout.create');
    }
    public function basicWiz(){
        return view('pages.staffs.wizard.basic-info');
    }
    public function empWiz(){
        return view('pages.staffs.wizard.emp-position');
    }
    public function eduWiz(){
        return view('pages.staffs.wizard.edu-qualifi');
    }
    public function faminfoWiz(){
        return view('pages.staffs.wizard.family-info');
    }
    public function medicalInfoWiz(){
       return view('pages.staffs.wizard.medical-info'); 
    }
    public function apponmentWiz(){
        return view('pages.staffs.wizard.appoinment-info');
    }
}
