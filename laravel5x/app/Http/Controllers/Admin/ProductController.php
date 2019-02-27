<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
    	$data = DB::table('=product')->get();
    	// lay het du lieu ra
    	//dd($data[0]);
    	return view('admin.product.index')->with('data',$data);
    }
}
