<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
    	// truyen du lieu tu controller ra view
    	// truyen nhieu du lieu 1 luc - sd mang
    	// 
    	$data = [
    		'name' => 'Annhii',
    		'age' => 'nu',
    		'phone' => '0355090345'
    	];
    	$money = 1111111111;

    	$infoSt = [
    		[
    			'MSV' => 1,
    			'name' => 'DevmaxT',
    			'age' => '0',
    			'phone' => '0355090345',
    			'money' => 111111
    		],
    		[
    			'MSV' => 2,
    			'name' => 'Annhii',
    			'age' => '1',
    			'phone' => '0355090345',
    			'money' => 1111111
    		],
    		[
    			'MSV' => 3,
    			'name' => 'Nino',
    			'age' => '0',
    			'phone' => '0355090345',
    			'money' => 11111111
    		]
    	];
    	// nap vao 1 file view
    	/*return view('demo',[
    		'info' => $data
    	]);*/
    	//return view('demo')->with('m',$money);
    	return view('demo',['info' => $infoSt]);
    	//return view('demo');
    	// phan cap thu muc trong lavarel
    }
    public function annhii()
    {
        return view('demo.annhii');
    }
    public function nino(){
        return view('demo.nino');
    }   
}
