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
Route::get('/hostelspayment', 'superadmincontrollers\hostelspaymentController@index')->name('superadmin.hostelspayment');
Route::get('/hostelsresidents', 'superadmincontrollers\hostelsresidentsController@index')->name('superadmin.hostelsresidents');
Route::get('/superreports', 'superadmincontrollers\reportsController@index')->name('superadmin.reports');
Route::get('/visitors', 'superadmincontrollers\visitorsController@index')->name('superadmin.visitors');
Route::get('/superhistory', 'superadmincontrollers\historyController@index')->name('superadmin.history');
Route::get('/superreviews', 'superadmincontrollers\reviewsController@index')->name('superadmin.reviews');
Route::get('/registrationrequests', 'superadmincontrollers\registrationrequestsController@index')->name('superadmin.registrationrequests');
Route::get('/updaterequests', 'superadmincontrollers\updaterequestsController@index')->name('superadmin.updaterequests');
Route::post('/acceptrequest', 'superadmincontrollers\registrationrequestsController@accept_req')->name('acceptrequest');
Route::post('/rejectrequest', 'superadmincontrollers\registrationrequestsController@reject_req')->name('rejectrequest');
Route::post('/selectedhosteldetails', 'superadmincontrollers\hostelController@selected_details')->name('selectedhosteldetails');
Route::post('/requestedhosteldetails', 'requestedhosteldetailsController@requested_details')->name('requestedhosteldetails');
//Routes for HOSTEL ADMIN

Route::get('/hosteladmindashboard', 'hosteladmincontrollers\hosteladmindashboardController@index')->name('hosteladmin.hosteladmindashboard');
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
Route::post('/requestedresidentdetails', 'hosteladmincontrollers\requestedresidentdetailsController@index')->name('requestedresidentdetails');
Route::post('/block', 'hosteladmincontrollers\requestedresidentdetailsController@block')->name('block');
Route::post('/requestedreservationdetails', 'hosteladmincontrollers\requestedreservationdetailsController@index')->name('requestedreservationdetails');
Route::post('/pending', 'hosteladmincontrollers\complaintsController@pending')->name('pending');
Route::post('/completed', 'hosteladmincontrollers\complaintsController@completed')->name('completed');
Route::post('/requestedresidentcomplaint', 'hosteladmincontrollers\requestedresidentcomplaintsController@index')->name('requestedresidentcomplaints');
Route::post('/generatemessreport', 'hosteladmincontrollers\requestedmessreportController@index')->name('generatemessreport');
Route::post('/generatefoodreport', 'hosteladmincontrollers\requestedfoodreportController@index')->name('generatefoodreport');
Route::get('/foodlist', 'hosteladmincontrollers\foodlistController@index')->name('hosteladmin.foodlist');
Route::get('/messmenus', 'hosteladmincontrollers\messmenusController@index')->name('hosteladmin.messmenus');
Route::get('/selectedroomdetails', 'hosteladmincontrollers\roomsController@selectedroom')->name('hosteladmin.selectedroomdetails');
