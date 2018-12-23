@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Data Applicant</div>
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>NIK</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Nomor HP</td>
                            <td>Email</td>
                            <td>Jam Kerja</td>
                            <td>Status Tempat Tinggal</td>
                            <td>Kode Peminjaman</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($data_applicant as $data)
                        <tr>
                            <td>{{$data['id_number_ktp']}}</td>
                            <td>{{$data['name_applicant_basedonid']}}</td>
                            <td>{{$data['current_address']}}</td>
                            <td>{{$data['number_phone']}}</td>
                            <td>{{$data['email']}}</td>
                            <td>{{$data['length_of_work']}}</td>
                            <td>{{$data['status_of_residence']}}</td>
                            <td>{{$data->applicationform['kode_peminjaman']}}</td>
                            <td><a href="/data_applicant/edit/{{$data['_id']}}">Edit</a>
                                <a href="/data_applicant/delete/{{$data['_id']}}">Hapus</a>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="/data_applicant/add" class="btn btn-primary pull-right">Tambah Data</a>
                <button type="button" class="btn btn-primary pull-right" id="refreshbtn">Refresh Data</button>
            </div>
        </div>
    </div>
</div>
@endsection