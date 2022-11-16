<?php


use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\userinfo;
use App\Models\event;
use App\Http\Controllers\EventController;   
    

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

Route::get('/dashboard', function () {
    return view('event.dashboard');
})->name('dashboard');

Route:: get('/event/create', function() {
    return view('event.create');
});


Route::get('/event', function() {
    return view('event.mainevent');
});


Route::get('/event/success', function() {
    return view('event.success');
});


Route::get('/event/fillformevent/{event}', 'EventController@formQrcode');


Route::get('/admin', function () {
    return view('admin.hello-world');
});


Route::post('/event/fillformevent/','EventController@adduser')->name('adduser');


Route::get('/event/namesort', 'EventController@namesort');
Route::get('/event/timestartsort', 'EventController@timestartsort');
Route::get('/event/datestartsort', 'EventController@datestartsort');
Route::get('/event/tagendsort', 'EventController@tagendsort');
Route::get('/event/tagwaitsort', 'EventController@tagwaitsort');


Route::get('/event','EventController@index')->name('event');
    
Route::get('/event/trash','EventController@trash');
Route::post('/event/create','EventController@store')->name('addEvent');

Route::post('/event/sort','EventController@index')->name('sortt');

//get คือสร้างหน้าใหม่เลย รับข้อมูลจากหน้า mainevent มายัง EventController เข้าสู่ฟังก์ชัน Edit
Route::get('/event/edit/{id}','EventController@edit');

Route::get('/event/status/{id}','EventController@status');

//get คือสร้างหน้าใหม่เลย รับข้อมูลจากหน้า mainevent มายัง EventController เข้าสู่ฟังก์ชัน Edit    
Route::get('/event/view/{NameEvent}','EventController@view');

Route::get('/event/qrcode/{uuid}','EventController@qrcode');

//post คืออัพเดทข้อมูลใน DB รับข้อมูลมาจากหน้า edit มายัง EventController เข้าสู่ฟังก์ชัน update
Route::post('/event/update/{id}','EventController@update');

Route::get('/event/softdelete/{id}','EventController@softdelete');
Route::get('/event/restore/{id}','EventController@restore');

Route::get('/event/delete/{id}','EventController@delete');

Route::get('/event/deleteview/{id}','EventController@deleteview');


Route::get("/search",'EventController@search')->name('searchroute');


Route::get('/all-tweets-csv/{NameEvent}', function($NameEvent){

    $table = userinfo::where('NameEvent','=',$NameEvent)->get();
    $filename = "export_$NameEvent.csv";
    $handle = fopen($filename, 'w+',"utf-8-sig") ;
    fputcsv($handle, array('NameEvent', 'UserFirstName', 'UserLastName','passportID','email','telephone'));

    foreach($table as $row) {
        fputcsv($handle, 
        array($row['NameEvent'], $row['UserFirstName'], $row['UserLastName'], $row['passportID'],$row['email'],$row['telephone']));
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv'
    );

    return Response::download($filename, $filename , $headers);
});


Route::get('/create', function(Request $request){
    return view('message');
});
Route::get('/defCustom', function(Request $request){
    return view('message.create_custom');
});
Route::get('/jarvis1', function(Request $request){
    return view('message.jarvis-theme');
});
Route::get('/jarvis', function(Request $request){
    return view('message.animated-weather-card');
});
Route::get('custom', 'MessageController@custom');
Route::get('custom', 'MessageController@customEdit');
Route::post('customs', 'MessageController@customUpdate')->name('update.customUpdate');
Route::post('custom', 'MessageController@customStore')->name('customs.customStore');
Route::get('/unDirty', 'MessageController@unDirty');
Route::get('/isDirty', 'MessageController@isDirty');
Route::get('/show', 'MessageController@show');
Route::post('/touch', 'MessageController@touch');
Route::get('/', 'MessageController@index');
Route::get('message', 'MessageController@index');
Route::get('message', 'MessageController@edit');
Route::post('message', 'MessageController@update')->name('messages.update');
Route::post('message','MessageController@store')->name('messages.store');
Route::resource('message', 'MessageController');
Route::apiResource('message', 'MessageController');

Route::get('/welcome_screen', function () {
    return view('show.showdashboard');
});
Route:: get('/welcome_screen/create', function() {
    return view('show.create');
});
Route::get('/test','ShowController@test');
Route::get('/welcome_screen/edit/{id}','ShowController@edit');
Route::post('/welcome_screen/update/{id}','ShowController@update');
Route::get('/welcome_screen','ShowController@index');
Route::get('/welcome_screen/link/{uuid}','ShowController@viewPage');
Route::get('/welcome_screen/callback/{uuid}','ShowController@callback');
Route::post('/welcome_screen/show/{uuid}','ShowController@showPage');
Route::post('/welcome_screen/create', 'ShowController@store')->name('storeShow');
Route::get('/welcome_screen/create','ShowController@create')->name('createShow');
Route::post('/touch','ShowController@touch');
Route::get('/unDirty/{uuid}', 'ShowController@unDirty');
Route::get('/isDirty/{uuid}', 'ShowController@isDirty');
Route::get('/welcome_screen/softtrash/{id}','ShowController@destroy');
Route::get('/welcome_screen/preview1', 'ShowController@preview1');
Route::get('/welcome_screen/preview2', 'ShowController@preview2');
Route::get('/welcome_screen/preview3', 'ShowController@preview3');

//Mockup Welcome Screen
Route::get('/welcome_screens/link/{id}','WelcomeScreenController@show');
Route::get('/front','WelcomeScreenController@front');