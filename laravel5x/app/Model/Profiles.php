<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profiles extends Model
{
    protected $table = 'profiles';
    private $limit = 2; // bao nhieu dong du lieu tren 1 trang
	// lam viec voi bang profiles
	private function changeDataToArray($data)
	{
		// ham nay chi danh cho kieu orm
		return ($data) ? $data->toArray() : [];
	}
    public function saveProfile($data)
    {
    	$insert = DB::table('profiles')->insert($data);
    	if($insert){
    		return true;
    	}
    	return false;
    }
    public function getAllDataProfile($key = '')
    {
    	// kieu orm
    	$data = Profiles::where('fullname','LIKE','%'.$key.'%')
                        ->orWhere('email','LIKE','%'.$key.'%')
                        ->orWhere('phone','LIKE','%'.$key.'%')
                        ->paginate($this->limit);
    	//$data = $this->changeDataToArray($data);
        return $data;
        /*$data = DB::table('profiles')->where('fullname','LIKE','%'.$key.'%')
                                     ->orWhere('email','LIKE','%'.$key.'%')
                                     ->orWhere('phone','LIKE','%'.$key.'%')
                                     ->paginate($this->limit);
        $data = json_decode($data,true); // ep ve mang vi trc do la object
        return $data;*/
    }
    public function deleteProfileById($id)
    {
        $profile = Profiles::find($id);
        if($profile->delete()){
            return true;
        }
        return false;
    }
    public function getDataInfoProfileById($id)
    {
        $info = Profiles::find($id);
        return $this->changeDataToArray($info);
    }
    public function updateProfileById($data,$id)
    {
        $up = DB::table('profiles')
            ->where('id', $id)
            ->update($data);
        if($up){
            return true;
        }
        return false;
    }
    public function getInfoProfileByActive($status)
    {
        $info = Profiles::where('status',$status)->first();
        return $info;
    }
}
