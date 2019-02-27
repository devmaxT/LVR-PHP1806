<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    public function add($id , Request $request)
    {
    	// lay thong tin san pham theo id
    	$id = is_numeric($id) ? $id : 0;
    	$info = DB::table('=product')->where('id',$id)->first();
    	if($info){
    		// bat dau add vao gio hang
            Cart::add([
                'id' => $info->id,
                'name' => $info->name,
                'qty' =>1,
                'price' =>$info->money,
                'options' => [
                    'image' => $info->image
                ]
            ]);
    		// quay ve trang thong tin gio hang
            return redirect()->route('admin.listCart'); 
    	} else {
    		return redirect()->route('admin.dashboard');
    	}
    }
    public function index()
    {
        // lay thong tin cac san pham trong gio hang
        $cartData = Cart::content();
        $totalItems = Cart::content()->count();
        $totalBuy = Cart::count();
        $data = [];
        $data['data'] = $cartData;
        $data['total'] = $totalItems;
        $data['totalBuy'] = $totalBuy;
        //dd($cartData);
        // view sp - ng dung nhin thay sp trong gio hang
        return view('admin.cart.index',$data);
        // day nhieu du lieu ra ---------^
    }
    public function update( Request $request)
    {
        $id = $request->id;
        $qty = $request->qty;
        $checkQty = (is_numeric($qty) && $qty > 0 && $qty < 11 ? true : false);
        if($id && $checkQty){
            // dung moi cho update
            Cart::update($id,$qty);
            //cho ve trang list cart
            return redirect()->route('admin.listCart');
        }
    }
    public function delete($id)
    {
        if($id){
            Cart::remove($id);
        }
        return redirect()->route('admin.listCart');
    }
    public function deleteAll()
    {
        if(Cart::content()){
            Cart::destroy();
        }
        return redirect()->route('admin.listCart');
    }
}
