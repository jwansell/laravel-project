<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Address;
use App\Models\Product;
use App\Models\OrderProduct;

Route::post('/login', function(Request $request){
     $credentials = $request->validate([
            'uname' => ['required'],
            'psw' => ['required'],
        ]);
        $result = User::where('username', $credentials['uname'])->first();
        if (isset($result) && $result->password == $credentials['psw']) {
            Auth::setUser($result);
            $request->session()->regenerate();
            // return redirect()->intended('/index');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('uname');
});

Route::get('/dashboard', function (){
    return view('dashboard')
    ->with('contacts', Contact::all());
});

Route::get('/', function () {
    return view('welcome');
});

Route::view('/index', 'index');

Route::get('/checkout', function(){ 
    return view('checkout')
    ->with('basket', []);
    //get data from session here and push it to checkout page
});

Route::get('/confirm', function(){
    $data = \App\Models\Address::with('orders.products')->get();
    return view('confirmation')
    ->with('addresses', $data);
});

Route::view('/contact', 'contactus');

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/orders', function(){
    $data = \App\Models\Order::with('order_products')->get();
    return view('ordersPage')
    ->with('orders', $data); // un comment when done testing insertdata
    // ->with('orders', Order::all();
    // ->join('order_products','orders.id','=','order_products.order_id')->get());
});

Route::get('/store', function (){
    return view('storePage')
    ->with('products', Product::all());
});

Route::get('/{any}', function () {
    return view('pagenotfound');
})->where('any', '.*');