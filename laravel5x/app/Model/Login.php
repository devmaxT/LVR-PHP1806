<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Login extends Model
{
	// lam viec voi bang Admins
    protected $table = 'admins';
    private function exchangeDataArray($data){
    	if($data){
    		$data = $data->toArray();
    	}
    	return $data;
    }
    public function checkAdminLogin($user , $pass)
    {
    	$data = Login::where(['username'=> $user , 'password'=> $pass , 'status'=> 1, 'role'=>1])->first();
    	return $this->exchangeDataArray($data);
    }
}
