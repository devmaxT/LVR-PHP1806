<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Model\Profiles;
class ResumeController extends BaseController
{
    public function index(Profiles $dbProfile)
    {
    	$infoProfile = $this->getDataInfoHeader( $dbProfile,1);
    	$data = [];
    	$data['info'] = $infoProfile;
    	return view('frontend.resume.index',$data);
    }
}
