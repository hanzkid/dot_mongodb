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

Route::get('/','HomeController@index');

Route::prefix('application_form')->group(function(){
	Route::get('/','HomeController@index');

	Route::get('add','HomeController@application_form_add');
	Route::get('edit/{id}','HomeController@application_form_edit');
	Route::get('delete/{id}','HomeController@application_form_delete');
	Route::post('add','HomeController@application_form_add_post');
	Route::post('edit/{id}','HomeController@application_form_edit_post');
});
Route::prefix('emergency_contact')->group(function(){
	Route::get('/','HomeController@emergency_contact');
	Route::get('add','HomeController@emergency_contact_add');
	Route::get('edit/{id}','HomeController@emergency_contact_edit');
	Route::get('delete/{id}','HomeController@emergency_contact_delete');
	Route::post('add','HomeController@emergency_contact_add_post');
	Route::post('edit/{id}','HomeController@emergency_contact_edit_post');
});
Route::prefix('data_applicant')->group(function(){
	Route::get('/','HomeController@data_applicant');
	Route::get('add','HomeController@data_applicant_add');
	Route::get('edit/{id}','HomeController@data_applicant_edit');
	Route::get('delete/{id}','HomeController@data_applicant_delete');
	Route::post('add','HomeController@data_applicant_add_post');
	Route::post('edit/{id}','HomeController@data_applicant_edit_post');
});
Route::prefix('tenor')->group(function(){
	Route::get('/','HomeController@tenor');
	Route::get('add','HomeController@tenor_add');
	Route::get('edit/{id}','HomeController@tenor_edit');
	Route::get('delete/{id}','HomeController@tenor_delete');
	Route::post('add','HomeController@tenor_add_post');
	Route::post('edit/{id}','HomeController@tenor_edit_post');
});
Route::prefix('company')->group(function(){
	Route::get('/','HomeController@company');
	Route::get('add','HomeController@company_add');
	Route::get('edit/{id}','HomeController@company_edit');
	Route::get('delete/{id}','HomeController@company_delete');
	Route::post('add','HomeController@company_add_post');
	Route::post('edit/{id}','HomeController@company_edit_post');
});
Route::prefix('qc')->group(function(){
	Route::get('/','HomeController@qc');
	Route::get('accept/{id}/{status}','HomeController@qc_accept');
});
Route::prefix('report')->group(function(){
	Route::get('/','HomeController@report');
});

Route::get('/json/application_form',function(){
	$json = [];
	for($i = 1; $i <= 10; $i++){
		$data = array("kode_peminjaman" => rand(),"load_tenor" => rand(1,12),"nama_sales" => "sales ".$i, "date_and_time" => rand(time(), time()+999), "file_attachment_ktp" => "ktp ".$i,"file_attachment_npwp" => "npwp ".$i,"file_attachment_sallary_slip" => "slip gaji ".$i);
		array_push($json, $data);

	}
	return $json;
});
use App\applicationform;
Route::get('/json/applicant',function(){
	$application_form = applicationform::all();
	$json = [];
	foreach($application_form as $key => $appl){
		$i = $key +1;
		$data = array(
			"application_form_id" => $appl['_id'],
			'id_number_ktp'=> rand(),
			"name_applicant_basedonid" => "applicant ". $i,
			"current_address" => "Alamat ".$i,
			"number_phone" => rand(),
			"email" => "applicant".$i."@gmail.com",
			"length_of_work" => 40,
			"status_of_residence" => rand(1,2)
		);
		array_push($json,$data);
	}
	return $json;
});
Route::get('/json/company',function(){
	$application_form = applicationform::all();
	$json = [];
	foreach($application_form as $key => $appl){
		$i = $key +1;
		$data = array(
			"application_form_id" => $appl['_id'],
			'name_company'=> "Perusahaan ".$i,
			"company_address" => "Alamat ". $i,
			"company_phone_number" => rand(),
			"job_position" => "Software Engineer",
			"division_of_work" => "IT"
		);
		array_push($json,$data);
	}
	return $json;
});
Route::get('/json/emergency_contact',function(){
	$application_form = applicationform::all();
	$json = [];
	$relationship = ["ibu","bapak","saudara"];
	foreach($application_form as $key => $appl){
		$i = $key +1;
		$data = array(
			"application_form_id" => $appl['_id'],
			'name_contact'=> "Nama Emergency ".$i,
			"emergency_address" => "Alamat ". $i,
			"emergency_number" => rand(),
			"emergency_contact_relationship" => $relationship[rand(0,2)]
		);
		array_push($json,$data);
	}
	return $json;
});
Route::get('/json/tenor',function(){
	$application_form = applicationform::all();
	$json = [];
	$relationship = ["ibu","bapak","saudara"];
	foreach($application_form as $key => $appl){
		$i = $key +1;
		$data = array(
			"application_form_id" => $appl['_id'],
			'amount_of_loan'=> rand(100000,1000000),
			"number_rekening_transfer" => rand(),
			"length_of_loan" => rand(1,12)
		);
		array_push($json,$data);
	}
	return $json;
});
Route::get('/json/qc',function(){
	$application_form = applicationform::all();
	$json = [];
	foreach($application_form as $key => $appl){
		$i = $key +1;
		$data = array(
			"application_form_id" => $appl['_id'],
			"status_form" => rand(0,1)
		);
		array_push($json,$data);
	}
	return $json;
});
