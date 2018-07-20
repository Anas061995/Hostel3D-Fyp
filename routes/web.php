<?php



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();
Route::GET('/logout', 'Auth\LoginController@logout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'SuperadmindashboardController@index')->name('superadmin.dashboard');
Route::get('/hostels', 'hostelController@index')->name('superadmin.hostels');
Route::get('/hosteladmins', 'hosteladminsController@index')->name('superadmin.hosteladmins');
Route::get('/hostelspayment', 'hostelspaymentController@index')->name('superadmin.hostelspayment');
Route::get('/hostelsresidents', 'hostelsresidentsController@index')->name('superadmin.hostelsresidents');
Route::get('/reports', 'reportsController@index')->name('superadmin.reports');
Route::get('/visitors', 'visitorsController@index')->name('superadmin.visitors');
Route::get('/history', 'historyController@index')->name('superadmin.history');
Route::get('/reviews', 'reviewsController@index')->name('superadmin.reviews');
Route::get('/registrationrequests', 'registrationrequestsController@index')->name('superadmin.registrationrequests');
Route::get('/updaterequests', 'updaterequestsController@index')->name('superadmin.updaterequests');
Route::post('/acceptrequest', 'registrationrequestsController@accept_req')->name('acceptrequest');
Route::post('/rejectrequest', 'registrationrequestsController@reject_req')->name('rejectrequest');