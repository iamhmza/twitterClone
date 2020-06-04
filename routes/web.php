
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store')->name('tweet.create');

    Route::get('/profile/{user:username}', 'ProfileController@show')->name('profile');
    Route::get('/profile/{user:username}/edit', 'ProfileController@edit')->name('profile.edit');
    Route::patch('/profile/{user:username}', 'ProfileController@update');

    Route::post('/profile/{user:username}/follow', 'FollowController@store');
});
Route::get('/explorer', 'ExplorerController@index')->name('explorer');

Route::get('/orders', "OrderTransactionController@index");
Route::post('/order', "OrderTransactionController@store");

Auth::routes();


Route::get('/test', function ()
{
    return 'test';
});