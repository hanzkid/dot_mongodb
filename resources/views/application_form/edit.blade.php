@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Tambah Data Application From</div>
	            <div class="card-body">
	            	<form method="POST" action="/application_form/edit/{{$app['_id']}}">
	            		@csrf
	            		<div class="form-group">
	            			<label>Kode Peminjaman</label>

	            			<input type="number" name="kode_peminjaman" class="form-control" value="{{$app['kode_peminjaman']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Load Tenor</label>

	            			<input type="number" name="load_tenor" class="form-control" value="{{$app['load_tenor']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Nama Sales</label>

	            			<input type="text" name="nama_sales" class="form-control" value="{{$app['nama_sales']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Tanggal Dan Waktu</label>

	            			<input type="number" name="tanggal_waktu" class="form-control" value="{{$app['date_and_time']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>File Ktp</label>
	            			
	            			<input type="text" name="file_ktp" class="form-control" value="{{$app['file_attachment_ktp']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>File NPWP</label>
	            			<input type="text" name="file_npwp" class="form-control" value="{{$app['file_attachment_npwp']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>File Slip Gaji</label>
	            			<input type="text" name="file_slipgaji" class="form-control" value="{{$app['file_attachment_sallary_slip']}}">
	            		</div>
	            		<button type="submit" class="btn btn-primary">Simpan</button>
	            	</form>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection