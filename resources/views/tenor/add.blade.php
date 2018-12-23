@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Tambah Data Tenor</div>
	            <div class="card-body">
	            	<form method="POST" action="/tenor/add">
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
	            			<label>Jumlah Pinjaman</label>
	            			<input type="number" name="jumlah" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Nomor Rekening</label>
	            			<input type="number" name="no_rek" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label>Jatuh Tempo</label>
	            			<input type="number" name="jatuh_tempo" class="form-control">
	            		</div>
	            		<button type="submit" class="btn btn-primary">Simpan</button>
	            	</form>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection