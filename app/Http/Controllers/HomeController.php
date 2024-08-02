<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function student()
    {
        return view('student.dashboard',["msg"=>"Hello! I am user"]);
    }
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function superadmin()
    {
        return view('superadmin.dashboard',["msg"=>"Hello! I am superadmin"]);
    }

    public function teacher()
    {
        return view('teacher.dashboard',["msg"=>"Hello! I am teacher"]);
    }
    public function cashier()
    {
        return view('cashier.dashboard',["msg"=>"Hello! I am cashier"]);
    }

}
