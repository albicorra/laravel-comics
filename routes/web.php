<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $series = config('comics');

    $shopDc = [
        [
          "image"=> asset('img/buy-comics-digital-comics.png'),
          "shop"=> 'Digital Comics',
        ],
        [
          "image"=> asset('img/buy-comics-merchandise.png'),
          "shop"=> 'Ds Merchandise',
        ],
        [
          "image"=> asset('img/buy-comics-subscriptions.png'),
          "shop"=> 'Subscription',
        ],
        [
          "image"=> asset('img/buy-comics-shop-locator.png'),
          "shop"=> 'Comic Shop Locator',
        ],
        [
          "image"=> asset('img/buy-dc-power-visa.svg'),
          "shop"=> 'Ds Power Visa',
        ],
    ];

    return view('homeComics')
    ->with('series', $series)
    ->with('shopDc', $shopDc);

});

Route::get('/{id}', function ($id) {
    $series = config('comics');

    
    abort_if( !isset($series[$id]), 404 );
    /* dd($id); */

    $serie = $series[$id];

    return view('productDetail')
    ->with('serie', $serie);

})->where('id', '[0-9]+');