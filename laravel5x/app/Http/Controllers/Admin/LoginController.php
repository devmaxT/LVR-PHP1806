<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginPost;
use App\Model\Login;
class LoginController extends Controller
{
    public function index()
    {
    	return view('login.index');
    }
    public function handleLogin(StoreLoginPost $resquest, Login $login)
    {
    	//dd($resquest->all());
    	$username = $resquest->input('user',null);
    	// $username = $resquest->user;
    	$password = $resquest->input('pass',null);
    	// validate form data
    	// kiem tra du lieu co ton tai trong database hay ko?
    	$infoAdmin = $login->checkAdminLogin($username, $password);
    	if($infoAdmin){
    		// luu thong tin cua nguoi dung vao session
    		$resquest->session()->put('username', $infoAdmin['username']);
    		// $_SESSION['username'] = $infoAdmin['username'];
    		$resquest->session()->put('id', $infoAdmin['id']);
    		$resquest->session()->put('email', $infoAdmin['email']);
    		$resquest->session()->put('role', $infoAdmin['role']);
    		// di vao trang dashboard
    		return redirect()->route('admin.dashboard');
    	} else {
    		return redirect()->route('admin.login',['state'=>'fail']);
    	}
    }
    public function logout(Request $request)
    {
        // xoa session
        $request->session()->forget('username');
        $request->session()->forget('id');
        $request->session()->forget('email');
        $request->session()->forget('role');
        return redirect()->route('admin.login');
    }
}