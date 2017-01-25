<?php

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
    $links = \App\Link::all();
    return view('welcome', compact('links'));
});

Route::get('/submit', function(){
  return view('submit');
});

Route::post('/submit', function(Request $request){
  $validator = Validator::make($request->all(), [
    'title' => 'required|max:255', 
    'url' => 'required|max:255',
    'description' => 'required|max:255',
  ]);

  if ($validator->fails()) {
    return back()
          ->withInput()
          ->withErrors($validator);
  }
});

Auth::routes();

Route::get('/home', 'HomeController@index');
