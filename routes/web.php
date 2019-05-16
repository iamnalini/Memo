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
    return view('welcome');
});

Route::get('/create',function(){
    return view('create');
});

Route::get('/edit/{id}',function($id){
    $note = App\Note::find($id);
    return view('edit',['note' => $note]);
});

Route::post('/cedit','Notes@edit');

Route::get('/view',function(){
    $notes = App\Note::where('user',Auth::id())->get();
    return view('home',['notes' => $notes]);
});

Route::get('/home',function(){
    $notes = App\Note::where('user',Auth::id())->get();
    return view('home',['notes' => $notes]);
});


Route::post('/store','Notes@create');

Route::get('/show/{id}',function($id){
    $note = App\Note::find($id);
    return view('show',['note' => $note]);
});

Route::get('/delete/{id}',function($id){
    $note = App\Note::destroy($id);
    return redirect('view');
});

Auth::routes();


Route::get('/devices','DevicesController@index');
 
Route::get('/devices/create','DevicesController@create');
 
Route::post('/devicesaction','DevicesController@storeDevice');
                                                                    