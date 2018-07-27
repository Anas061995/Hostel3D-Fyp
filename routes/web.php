<?php



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();
Route::GET('/logout', 'Auth\LoginController@logout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/superadmindashboard', 'superadmincontrollers\SuperadmindashboardController@index')->name('superadmin.dashboard');
Route::get('/hostels', 'superadmincontrollers\hostelController@index')->name('superadmin.hostels');
Route::get('/hosteladmins', 'superadmincontrollers\hosteladminsController@index')->name('superadmin.hosteladmins');
Route::get('/hostelspayment', 'hostelspaymentController@index')->name('superadmin.hostelspayment');
Route::get('/registrationrequests', 'registrationrequestsController@index')->name('superadmin.registrationrequests');
Route::post('/requestedhosteldetails', 'registrationrequestsController@index')->name('requestedhosteldetails');
Route::get('/hostelsresidents', 'superadmincontrollers\hostelsresidentsController@index')->name('superadmin.hostelsresidents');
Route::get('/superreports', 'superadmincontrollers\reportsController@index')->name('superadmin.reports');
Route::get('/visitors', 'superadmincontrollers\visitorsController@index')->name('superadmin.visitors');
Route::get('/superhistory', 'superadmincontrollers\historyController@index')->name('superadmin.history');
Route::get('/superreviews', 'superadmincontrollers\reviewsController@index')->name('superadmin.reviews');
Route::get('/updaterequests', 'superadmincontrollers\updaterequestsController@index')->name('superadmin.updaterequests');
Route::post('/acceptrequest', 'superadmincontrollers\registrationrequestsController@accept_req')->name('acceptrequest');
Route::post('/rejectrequest', 'superadmincontrollers\registrationrequestsController@reject_req')->name('rejectrequest');
Route::post('/selectedhosteldetails', 'superadmincontrollers\hostelController@selected_details')->name('selectedhosteldetails');

//Routes for HOSTEL ADMIN

Route::get('/hosteladmindashboard', 'hosteladmincontrollers\hosteladmindashboardController@index')->name('hosteladmin.hosteladmindashboard');
Route::get('/staff', 'hosteladmincontrollers\staffController@index')->name('hosteladmin.staff');
Route::get('/rooms', 'hosteladmincontrollers\roomsController@index')->name('hosteladmin.rooms');
Route::get('/hostelreviews', 'hosteladmincontrollers\reviewsController@index')->name('hosteladmin.reviews');
Route::get('/hostelreports', 'hosteladmincontrollers\reportsController@index')->name('hosteladmin.reports');
Route::get('/hostelhistory', 'hosteladmincontrollers\historyController@index')->name('hosteladmin.history');
Route::get('/complaints', 'hosteladmincontrollers\complaintsController@index')->name('hosteladmin.complaints');
Route::get('/model', 'hosteladmincontrollers\modelController@index')->name('hosteladmin.model');
Route::get('/residents', 'hosteladmincontrollers\residentController@index')->name('hosteladmin.residents');
Route::get('/finance', 'hosteladmincontrollers\financeController@index')->name('hosteladmin.finance');
Route::get('/reservations', 'hosteladmincontrollers\reservationController@index')->name('hosteladmin.reservations');
Route::get('/mess', 'hosteladmincontrollers\messController@index')->name('hosteladmin.mess');
