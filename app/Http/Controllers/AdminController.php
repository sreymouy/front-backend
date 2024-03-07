<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //return('admin.desboard');
        return view('admin.desboard');
    }
   // public function login()//// have or not, no problem
   // {
    //   return('auth.login');
    //}//// have or not, no problem


}
