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

Auth::routes();

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
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('NameEvent', 'UserFirstName', 'UserLastName','passportID','email','telephone'));


    foreach($table as $row) {
        fputcsv($handle, 
        array($row['NameEvent'], $row['UserFirstName'], $row['UserLastName'], $row['passportID'],$row['email'],$row['telephone']));
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv;charset=UTF-8',
        'charset' => 'utf-8',
    );

    return Response::download($filename, $filename , $headers);
});