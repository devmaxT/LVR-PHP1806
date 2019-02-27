<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// su dung thu vien DB de ket noi hay truy van du lieu

use Illuminate\Http\Request;
use App\Model\Post;
class QueryDBController extends Controller
{
    private $dbPost;
    public function __construct(Post $post)
    {
        $this->dbPost = $post;
    }
    public function orm(){
        $data = $this->dbPost->getAllData();
        $data2 = $this->dbPost->getAllDataPost();
        $data3 = Post::getDataById(1);
        //dd($data3['id'] ?? 0);
        dd($data,$data2);
        foreach($data2 as $key => $item){
            echo $item['id'];
            echo "<br>";
        }
    }
    public function index()
    {
    	$admin = DB::table('admins')->get();
    	$admin = json_decode($admin,true);
    	foreach ($admin as $key => $value) {
    		//echo $value['id'];
    		//echo "<br>";
    	}

    	$name = DB::table('admins')->select('username')->where('id',10)->first();
    	//dd($name);

    	//////
    	$count = DB::table('admins')->count();
    	//dd($count);
    	$min = DB::table('admins')->min('id');
    	$avg = DB::table('admins')->avg('id');
    	//dd($avg);

    	$exists = DB::table('admins')->where('id',1)->exists();
    	//dd($exists);
    	//$users = DB::table('admins')->distinct()->get();
    	//dd($users);
    	$raw = DB::table('admins')->select(DB::raw('count(*) as total,id'))->groupBy('id')->get();
    	$raw2 = DB::table('admins')->whereRaw('id NOT IN (1,2,3)')->get();
    	//dd($raw2);
    	$join = DB::table('posts')->select('posts.*','comments.*')->join('comments','comments.id_post','=','posts.id' )->get();
    	//dd($join);
    	$like = DB::table('admins')->select('*')->where('admins.email','like','%T%')->get();
    	//dd($like);
    	$between = DB::table('admins')->whereBetween('id', [3, 5])->get();
        //dd($between);
        $limit = DB::table('admins')->offset(10)->limit(5)->get();
        //dd($limit);
        //$insert = DB::table('comments')->insert(['questions'=>'ahihi','id_post'=>'1','created_at'=> null,'updated_at'=>null]);
        /*if($insert){
        	dd("ok");
        } else{
        	dd("err");
        }*/
        //$update = DB::table('comments')->where('id',7)->update(['questions'=> 'annhiiiii']);
 		/*if($update){
        	dd("ok");
        } else{
        	dd("err");
        }*/
        //$delete = DB::table('comments')->where('id',5)->delete();
    }
}
