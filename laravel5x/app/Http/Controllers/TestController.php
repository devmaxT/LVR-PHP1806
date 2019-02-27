<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function __construct()
	{
		// nap middleware
		//$this->middleware('my.check.age:user')->except('index');
		//$this->middleware('my.check.age')->only('checkAgeWatchFilm');
	}
    public function index($name , $id , Request $request)
    {
    	$name = $request->name;
    	$id = $request->id;
    	return "Hello annhii - {$name} - {$id}";
    }
    public function checkAgeWatchFilm($age)
    {
    	// su dung middleware trong controller
    	return "My Age - {$age}";
    }
    public function testRequest(Request $request)
    {
    	$id = $request->id;
    	$name = $request->input('name');
    	//dd($name); // var_dump + die
    	$url = $request->fullUrl();
    	//dd($url);
    	// kiem tra phuong thuc gui len xem la phuong thuc nao : GET / POST / DELETE / PUT /PATCH
    	if($request->isMeThod('post')){
    		//echo "aaa";
    	} else {
    		//echo "bbb";
    	}
    	dd($request->all());
    	//dd($request->input('money','100000'));
    	//dd($request->query());
    }
}
