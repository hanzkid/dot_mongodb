@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Data Application From</div>
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>Kode Peminjaman</td>
                            <td>Load Tenor</td>
                            <td>Nama Sales</td>
                            <td>Tanggal, Waktu</td>
                            <td>KTP</td>
                            <td>NPWP</td>
                            <td>Slip Gaji</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($application_form as $app)
                        <tr>
                            <td>{{$app['kode_peminjaman']}}</td>
                            <td>{{$app['load_tenor']}}</td>
                            <td>{{$app['nama_sales']}}</td>
                            <td>{{$app['date_and_time']}}</td>
                            <td>{{$app['file_attachment_ktp']}}</td>
                            <td>{{$app['file_attachment_npwp']}}</td>
                            <td>{{$app['file_attachment_sallary_slip']}}</td>
                            <td>
                                <a href="/application_form/edit/{{$app['_id']}}">Edit</a>
                                <a href="/application_form/delete/{{$app['_id']}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="/application_form/add" class="btn btn-primary pull-right">Tambah Data</a>
                <button type="button" class="btn btn-primary pull-right" id="refreshbtn">Refresh Data</button>
            </div>
        </div>
    </div>
</div>
@endsection