@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Edit Data Emergency Contact</div>
	            <div class="card-body">
	            	<form method="POST" action="/emergency_contact/edit/{{$app['_id']}}">
	            		@csrf
	            		<div class="form-group">
	            			<label>Nama Applicant</label>
	            			<select name="nama" class="form-control">
	            				@foreach($data_applicant as $data)
	            				@if($data->applicationform['_id'] == $data['application_form_id'])
	            				<option value="{{$data->applicationform['_id']}}" selected>{{$data['id_number_ktp']}} - {{$data['name_applicant_basedonid']}}</option>
	            				@else
	            				<option value="{{$data->applicationform['_id']}}">{{$data['id_number_ktp']}} - {{$data['name_applicant_basedonid']}}</option>
	            				@endif
	            				@endforeach
	            			</select>
	            		</div>
	            		<div class="form-group">
	            			<label>Nama Kontak Darurat</label>
	            			<input type="text" name="nama_darurat" class="form-control" value="{{$app['name_contact']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Alamat </label>
	            			<input type="text" name="alamat" class="form-control" value="{{$app['emergency_address']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Nomor Darurat</label>
	            			<input type="number" name="nomor_darurat" class="form-control" value="{{$app['emergency_number']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Hubungan</label>
	            			<select class="form-control" name="hubungan">
	            				<option value="ibu">Ibu</option>
	            				<option value="bapak">Bapak</option>
	            				<option value="saudara">Saudara</option>
	            			</select>
	            		</div>
	            		<button type="submit" class="btn btn-primary">Simpan</button>
	            	</form>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection