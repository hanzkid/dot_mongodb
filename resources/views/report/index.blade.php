@extends('layouts.app')

@section('content')
<div class="container" style="width: 100%; max-width: 100%;">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Data Application From</div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <td>Kode Peminjaman</td>
                                <td>Nama</td>
                                <td>Jumlah Pinjaman</td>
                                <td>Load Of Tenor</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($application_form as $app)
                            <tr>
                                <td>{{$app['kode_peminjaman']}}</td>
                                <td>{{$app->dataapplicant['name_applicant_basedonid']}}</td>
                                <td>{{$app->tenor['amount_of_loan']}}</td>
                                <td>{{$app['load_tenor']}}</td>
                                <td>{{!empty($app->qc) ?  $app->qc['status_form'] : "Belum Diproses"}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection