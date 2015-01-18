<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
	"uses" => "HomeController@showWelcome",
]);
Route::get('bencana', [
	"uses" => "DisasterController@showIndex",
]);
Route::get('bencana/donasi', [
	"uses" => "DisasterController@showDonate",
]);
Route::get('bencana/user/relawan', [
	"uses" => "UserController@showRelawan",
]);
Route::get('bencana/user/koordinator', [
	"uses" => "UserController@showKoordinator",
]);
Route::post('bencana/user/koordinator', [
	"uses" => "UserController@doKoordinator",
]);
Route::get('bencana/admin/logistik', [
	"uses" => "AdminController@showLogistic",
]);
Route::get('bencana/admin/logistik/bagilogistik', [
	"uses" => "AdminController@showBagiLogistik",
]);
Route::get('bencana/admin/tambahlogin', [
	"uses" => "AdminController@showAddLogin",
]);
Route::get('bencana/admin/update', [
	"uses" => "AdminController@showUpdate",
]);
Route::get('bencana/admin/userrole', [
	"uses" => "AdminController@showUserRole",
]);
Route::get('bencana/admin/request', [
	"uses" => "AdminController@showRequest",
]);
Route::get('bencana/admin/timdarurat', [
	"uses" => "AdminController@showTimDarurat",
]);
Route::get('bencana/admin/entri', [
	"uses" => "AdminController@showTambahLogistik",
]);