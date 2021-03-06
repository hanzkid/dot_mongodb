@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Tambah Data Applicant</div>
	            <div class="card-body">
	            	<form method="POST" action="/data_applicant/edit/{{$appl['_id']}}">
	            		@csrf
	            		<div class="form-group">
	            			<label>Kode Peminjaman - Nama Sales</label>
	            			<select class="form-control" name="kode_peminjaman" class="form-control">
	            				@foreach($application_form as $app)
	            				@if($app['_id'] == $appl['application_form_id'])
	            				<option value="{{$app['_id']}}" selected>{{$app['kode_peminjaman'].' - '.$app['nama_sales']}}</option>
	            				@else
	            				<option value="{{$app['_id']}}">{{$app['kode_peminjaman'].' - '.$app['nama_sales']}}</option>
	            				@endif
	            				@endforeach
	            			</select>
	            		</div>
	            		<div class="form-group">
	            			<label>Nomor Ktp ( NIK )</label>
	            			<input type="number" name="no_ktp" value="{{$appl['id_number_ktp']}}" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Nama ( Berdasar Nama Di KTP )</label>
	            			<input type="text" name="nama" value="{{$appl['name_applicant_basedonid']}}" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Alamat</label>
	            			<input type="text" name="alamat" value="{{$appl['current_address']}}" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>No HP</label>
	            			<input type="number" name="no_hp" class="form-control" value="{{$appl['number_phone']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Email</label>
	            			<input type="email" name="email" class="form-control" value="{{$appl['email']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Lama Jam Kerja</label>
	            			<input type="number" name="lama_jamkerja" class="form-control" value="{{$appl['length_of_work']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Status Residence</label>
	            			<select name="status" class="form-control">
	            				<option value="1">1. Kontrak</option>
	            				<option value="2">2. Tetap</option>
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