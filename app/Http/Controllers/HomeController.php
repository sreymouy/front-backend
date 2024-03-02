<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;

class HomeController extends Controller
{
    function index()
    {
        //$slideshows = Slideshow::all();
        //$slideshows = Slideshow::where('enable', '1')->get();//mean on database 1 is show, but if 0 is don't show
        $slideshows = Slideshow::where('enable', '1')
                                    //->orderBy('ssorder')
                                    ->get();
        return view('home', compact('slideshows')); //slideshows is variable
    }
}
