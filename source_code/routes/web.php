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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','LeadController@leadform');
Route::post('/save-lead','LeadController@save_lead');
Route::post('/ajax-save-lead','LeadController@ajax_save_lead');

Route::group(array('middleware'=>'auth'),function()
{
	Route::get('/agent', 'AgentController@dashboard');
	Route::get('/agent/logout', 'AgentController@logout');

	Route::get('/agent/leads','AgentController@list_leads');
	Route::get('/leads/detail_view/{id}','AgentController@lead_details');
});
Route::get('/agent/login','AgentController@login');
Route::post('/agent/agentlogin','AgentController@agentlogin');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
