<?php

use App\Vertical;
use App\Virtical;
use Illuminate\Http\Request;

Route::get('login', function(){
	 return view('welcome');
});



Route::get('verticals/register', function(){
	// Available alpha caracters
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

		// generate a pin based on 2 * 7 digits + a random character
		$pin = mt_rand(1000000, 9999999)
		    . mt_rand(1000000, 9999999)
		    . $characters[rand(0, strlen($characters) - 1)];

		// shuffle the result
		$vertical_id = str_shuffle($pin);
		$vertical_secret = str_shuffle(sha1(time()));


	 return view('verticals.register')
	 			->with(compact('vertical_id'))
	 			->with(compact('vertical_secret'));
});


Route::get('verticals/edit/{id}', function($id){

    $vertical = Vertical::find($id);
    return view('verticals.edit')
        ->with(compact('vertical'));
});

Route::post('verticals/register', function(Request $request){
		Vertical::create($request->all());
	return redirect('verticals');
});

Route::get('verticals', function(){

    $verticals = Vertical::all();
    return view('verticals.list')
            ->with(compact('verticals'));
});



Route::get('authenticate', function(){
	$id = $_GET['USID'];
	setcookie("USID", $id, time() + (86400 * 30), "/");
});

Route::get('authentication', function(){
	return '<a href="http://accounts.clouddecor.dev/authenticated?return=http://onedecor.dev">authorized</a>';
});

Route::get('authenticated', function(){
    // According to user access cookies should be published!
    $usid = sha1(time());
    $return = $_GET['return'];
    $verticals = Vertical::all();
    return view('authenticated')
        ->with(compact('verticals','usid','return'));
});

