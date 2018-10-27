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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', function(){
    return view('dashboard');
});

Route::get('sendmessage', function(){
  //  use Twilio\Rest\Client; 

    $sid    = "AC1e68a7bb5d563115aaeaae0d46cf114c"; 
$token  = "e5e2e589a004c82700e4c5deeb877904"; 
$twilio = new \Twilio\Rest\Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+639156469766", // to 
                           array( 
                               "from" => "+16147398244",       
                               "body" => "Sent in laravel" 
                           ) 
                  ); 
 
print($message->sid);
});

Route::get('sendpusher', function(){
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
      );
      $pusher = new Pusher\Pusher(
        '8b1a9ed70513c08dddae',
        '02f904b10162af433b9a',
        '626655',
        $options
      );
    
      $data['message'] = 'hello world';
      $pusher->trigger('my-channel', 'my-event', $data);
});

Route::get('recievepusher', function(){
    return view('test');
});

Route::get('community', 'CommunityController@viewCommunity');



Route::get('semantic', function(){
    return view('semantic');
});