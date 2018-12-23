@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
	        <div class="card">
	            <div class="card-header">Data Company</div>
	            <div class="card-body">
	                <table class="table table-striped table-hover table-bordered">
	                    <thead>
	                    	<tr>
	                    		<td>Nama</td>
	                    		<td>Perusahaan</td>
	                    		<td>No Perusahan</td>
	                    		<td>Alamat</td>
	                    		<td>Posisi</td>
	                    		<td>Divisi</td>
	                    		<td></td>
	                    	</tr>
	                    </thead>
	                    <tbody>
	                    	@foreach($company as $com)
	                    	<tr>
	                    		<td>{{$com->applicationform->dataapplicant['name_applicant_basedonid']}}</td>
	                    		<td>{{$com['name_company']}}</td>
	                    		<td>{{$com['company_phone_number']}}</td>
	                    		<td>{{$com['company_address']}}</td>
	                    		<td>{{$com['job_position']}}</td>
	                    		<td>{{$com['division_of_work']}}</td>
	                    		<td><a href="/company/edit/{{$com['_id']}}">Edit</a>
	                    			<a href="/company/delete/{{$com['_id']}}">Hapus</a>
	                    		</td>
	                    	</tr>
	                    	@endforeach
	                    </tbody>
	                </table>
	            </div>
	            <div class="card-footer">
	                <a href="/company/add" class="btn btn-primary pull-right">Tambah Data</a>
	                <button type="button" class="btn btn-primary pull-right" id="refreshbtn">Refresh Data</button>
            	</div>
	        </div>
	    </div>
	</div>
</div>

@endsection