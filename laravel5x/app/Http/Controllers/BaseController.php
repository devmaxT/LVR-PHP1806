<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Profiles;
class BaseController extends Controller
{
    protected function getDataInfoHeader($dbProfile, $status = 1 )
    {
    	$infoProfile = $dbProfile->getInfoProfileByActive($status);
    	return $infoProfile;
    }
}
