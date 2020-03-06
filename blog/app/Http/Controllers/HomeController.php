<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Asikite\Time3333\YourClass;

class HomeController extends Controller
{
    public function index(){
    	 $time = new YourClass;
    	echo $time->weekyear();
    	echo "<br>";
    	// echo($time->addDay(5));
    	echo($time->seachweeck(60));
    }
}
