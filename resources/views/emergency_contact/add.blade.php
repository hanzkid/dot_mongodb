@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Tambah Data Emergency Contact</div>
	            <div class="card-body">
	            	<form method="POST" action="/emergency_contact/add">
	            		@csrf
	            		<div class="form-group">
	            			<label>Nama Applicant</label>
	            			<select name="nama" class="form-control">
	            				@foreach($data_applicant as $data)
	            				<option value="{{$data->applicationform['_id']}}">{{$data['id_number_ktp']}} - {{$data['name_applicant_basedonid']}}</option>
	            				@endforeach
	            			</select>
	            		</div>
	            		<div class="form-group">
	            			<label>Nama Kontak Darurat</label>
	            			<input type="text" name="nama_darurat" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Alamat </label>
	            			<input type="text" name="alamat" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Nomor Darurat</label>
	            			<input type="number" name="nomor_darurat" class="form-control">
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