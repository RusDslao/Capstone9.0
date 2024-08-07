<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */    
    
     public function __construct()
     {
         $this->middleware('auth');
     }
        /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */

    public function dashboard()
    {
        $newEnrollments = \App\Models\Enrollment::where('status', 'new')->count();
        // Add any other data you need for the view
    
        return view('admin.dashboard', compact('newEnrollments'));
    }

    public function enrollment()
    {
        return view('admin.enrollment');
    }
    public function masterlist()
    {
        return view('admin.masterlist');
    }
    public function schedule()
    {
        return view('admin.schedule');
    }
    public function accounts()
    {
        return view('admin.accounts');
    }
    public function sections(){
        return view('admin.sections');
    }
    public function announcements()
    {
        return view('admin.announcements');
    }
    public function settings()
    {
        return view('admin.settings');
    }

}
