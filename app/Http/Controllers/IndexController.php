<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //
    public function sayhello(){
    	$name = "Hoa Nguyen";
    	return view("hello", compact('name'));
    }

}
