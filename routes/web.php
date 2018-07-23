<?php



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();
Route::GET('/logout', 'Auth\LoginController@logout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'superadmincontrollers\SuperadmindashboardController@index')->name('superadmin.dashboard');
Route::get('/hostels', 'superadmincontrollers\hostelController@index')->name('superadmin.hostels');
Route::get('/hosteladmins', 'superadmincontrollers\hosteladminsController@index')->name('superadmin.hosteladmins');
Route::get('/hostelspayment', 'hostelspaymentController@index')->name('superadmin.hostelspayment');
Route::get('/hostelsresidents', 'superadmincontrollers\hostelsresidentsController@index')->name('superadmin.hostelsresidents');
Route::get('/reports', 'superadmincontrollers\reportsController@index')->name('superadmin.reports');
Route::get('/visitors', 'superadmincontrollers\visitorsController@index')->name('superadmin.visitors');
Route::get('/history', 'superadmincontrollers\historyController@index')->name('superadmin.history');
Route::get('/reviews', 'superadmincontrollers\reviewsController@index')->name('superadmin.reviews');
Route::get('/registrationrequests', 'superadmincontrollers\registrationrequestsController@index')->name('superadmin.registrationrequests');
Route::get('/updaterequests', 'superadmincontrollers\updaterequestsController@index')->name('superadmin.updaterequests');
Route::post('/acceptrequest', 'superadmincontrollers\registrationrequestsController@accept_req')->name('acceptrequest');
Route::post('/rejectrequest', 'superadmincontrollers\registrationrequestsController@reject_req')->name('rejectrequest');
Route::post('/selectedhosteldetails', 'superadmincontrollers\hostelController@selected_details')->name('selectedhosteldetails');
