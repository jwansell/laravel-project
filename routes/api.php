<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Models\User;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Address;
use App\Models\Product;
use App\Models\OrderProduct;

Route::post('/contact', function(Request $request){

    $fname = $request->input('fname');
    $lname = $request->input('lname');
    $email = $request->input('email');
    $message = $request->input('message');

    $contact = Contact::insert([
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'message'=> $message
    ]);
    return redirect()->intended('/contact');
});

Route::get('/logout', function(Request $request){
    //when user goes to this route, destroy/close session, redirect to index page
    $request->session()->invalidate();
    return redirect()->intended('/index');
});

Route::post('/checkout', function(Request $request){
    $address = $request->get('address');
    $postcode = $request->get('postcode');
    $city = $request->get('city');
    $county = $request->get('county');

    $address = Address::insert([
        'user_id' => '3',
        'order_id' => '3',
        'address' => $address,
        'postcode' => $postcode,
        'city' => $city,
        'county' => $county
    ]);
    // return redirect()->intended('/confirm');
});
Route::post('/basket', function(Request $request) {
    // DB::table('products')->get();
    // $id = $product->id;
    // $item = $product->item;
    // $price = $product->price;

    // session([
    //     'id' => $id,
    //     'item' => $item,
    //     'price' => $price,
    //     'quantity' => 0
    // ]);

    // $request->session()->increment('quantity');

    $item = [
        'id' => $product->id,
        'item' => $product->item,
        'price' => $product->price
    ];

    session(['basket' => $item]);
});


Route::get('/users', function (Request $request) {
    dd('works');
});



