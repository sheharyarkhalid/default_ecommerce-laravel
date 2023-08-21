<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website;
use App\Http\Controllers\BusinessesController;
use App\Http\Controllers\Cart;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [Website::class, 'index']);
Route::get('/shop', [Website::class, 'shop'])->name("shop");




Route::get('/shop/{category_slug}', [Website::class, 'shop']  )->name('shop.category');


Route::get('/product/{product_url}', [Website::class, 'single_product']);

Route::get('/cart', [Website::class, 'cart'])->name("cart");




// Ajax routes
Route::post('/add_to_cart', [Cart::class, 'add']  );
Route::post('/cart_decrease', [Cart::class, 'item_decrease_qty']  );
Route::post('/cart_increase', [Cart::class, 'item_increase_qty']  );
Route::post('/cart_remove', [Cart::class, 'remove_item']  );
Route::post('/product_details', [Website::class, 'get_product_popup']  );




Route::get('/login', [Website::class, 'login'])->name("login");
Route::post('/login', [Website::class, 'login_auth'])->name('login_post');

// Route::middleware('customer_login_auth')->group(function () {
    // Your protected routes here
    Route::get('/checkout', [Website::class, 'checkout'])->name("checkout");
// });

