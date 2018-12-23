@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Tambah Data Company</div>
	            <div class="card-body">
	            	<form method="POST" action="/company/edit/{{$appl['_id']}}">
	            		@csrf
		            	<div class="form-group">
	            			<label>Kode Peminjaman - Nama Peminjam</label>
	            			<input type="text" class="form-control" readonly value="{{ $appl->applicationform['kode_peminjaman'].' - '.$appl->applicationform->dataapplicant['name_applicant_basedonid'] }}">
	            		</div>
	            		<div class="form-group">
	            			<label>Nama Perusahaan</label>
	            			<input type="text" name="nama_perusahaan" class="form-control" value="{{$appl['name_company']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Alamat Perusahaan</label>
	            			<input type="text" name="alamat_perusahaan" class="form-control" value="{{$appl['company_address']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>No Telp Perusahaan</label>
	            			<input type="text" name="no_perusahaan" class="form-control" value="{{$appl['company_phone_number']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Posisi</label>
	            			<input type="text" name="posisi" class="form-control" value="{{$appl['job_position']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Divisi</label>
	            			<input type="text" name="divisi_perusahaan" class="form-control" value="{{$appl['division_of_work']}}">
	            		</div>
	            		<button class="btn btn-primary" type="submit">Simpan</button>
            		</form>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection