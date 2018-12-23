@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Tambah Data Company</div>
	            <div class="card-body">
	            	<form method="POST" action="/company/add">
	            		@csrf
		            	<div class="form-group">
	            			<label>Kode Peminjaman - Nama Peminjam</label>
	            			<select class="form-control" name="kode_peminjaman" class="form-control">
	            				@foreach($application_form as $app)
	            				<option value="{{$app['_id']}}">{{$app['kode_peminjaman'].' - '.$app->dataapplicant['name_applicant_basedonid']}}</option>
	            				@endforeach
	            			</select>
	            		</div>
	            		<div class="form-group">
	            			<label>Nama Perusahaan</label>
	            			<input type="text" name="nama_perusahaan" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Alamat Perusahaan</label>
	            			<input type="text" name="alamat_perusahaan" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>No Telp Perusahaan</label>
	            			<input type="text" name="no_perusahaan" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Posisi</label>
	            			<input type="text" name="posisi" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Divisi</label>
	            			<input type="text" name="divisi_perusahaan" class="form-control">
	            		</div>
	            		<button class="btn btn-primary" type="submit">Simpan</button>
            		</form>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection