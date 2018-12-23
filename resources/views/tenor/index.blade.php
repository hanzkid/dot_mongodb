@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Data Tenor</div>
	            <div class="card-body">
	                <table class="table table-striped table-hover table-bordered">
	                    <thead>
	                    	<tr>
	                    		<td>Kode Peminjaman</td>
	                    		<td>Nama Peminjam</td>
	                    		<td>Jumlah</td>
	                    		<td>No Rek</td>
	                    		<td>Jatuh Tempo</td>
	                    		<td></td>
	                    	</tr>
	                    </thead>
	                    <tbody>
	                    	@foreach($tenor as $data)
	                    	<tr>
	                    		<td>{{$data->applicationform['kode_peminjaman']}}</td>
	                    		<td>{{$data->applicationform->dataapplicant['name_applicant_basedonid']}}</td>
	                    		<td>{{number_format($data->amount_of_loan)}}</td>
	                    		<td>{{$data->number_rekening_transfer}}</td>
	                    		<td>{{$data->length_of_loan}}</td>
	                    		<td><a href="/tenor/edit/{{$data['_id']}}">Edit</a>
	                    			<a href="/tenor/delete/{{$data['_id']}}">Hapus</a></td>
	                    	</tr>
	                    	@endforeach
	                    </tbody>
	                </table>

	            </div>
	            <div class="card-footer">
	            	<a href="/tenor/add" class="btn btn-primary pull-right">Tambah Data</a>
                	<button type="button" class="btn btn-primary pull-right" id="refreshbtn">Refresh Data</button>
	            </div>
	        </div>
    	</div>
    </div>
</div>

@endsection