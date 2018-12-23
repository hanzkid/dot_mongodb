@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Tambah Data Tenor</div>
	            <div class="card-body">
	            	<form method="POST" action="/tenor/edit/{{$appl['_id']}}">
	            		@csrf
	            		<div class="form-group">
	            			<label>Kode Peminjaman - Nama Peminjam</label>
	            			<input type="text" class="form-control" readonly value="{{ $appl->applicationform['kode_peminjaman'].' - '.$appl->applicationform->dataapplicant['name_applicant_basedonid'] }}">
	            		</div>
	            		<div class="form-group">
	            			<label>Jumlah Pinjaman</label>
	            			<input type="number" name="jumlah" class="form-control" value="{{$appl['amount_of_loan']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Nomor Rekening</label>
	            			<input type="number" name="no_rek" class="form-control" value="{{$appl['number_rekening_transfer']}}">
	            		</div>
	            		<div class="form-group">
	            			<label>Jatuh Tempo</label>
	            			<input type="number" name="jatuh_tempo" class="form-control" value="{{$appl['length_of_loan']}}">
	            		</div>
	            		<button type="submit" class="btn btn-primary">Simpan</button>
	            	</form>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection