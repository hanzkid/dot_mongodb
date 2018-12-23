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
                                <td>Lama Pinjaman</td>
                                <td>Perusahaan</td>
                                <td>Nama Kontak Darurat</td>
                                <td>KTP</td>
                                <td>NPWP</td>
                                <td>Slip Gajii</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($application_form as $app)
                            <tr>
                                <td>{{$app['kode_peminjaman']}}</td>
                                <td>{{$app->dataapplicant['name_applicant_basedonid']}}</td>
                                <td>{{$app->tenor['amount_of_loan']}}</td>
                                <td>{{$app->tenor['length_of_loan']}}</td>
                                <td>{{$app->company['name_company']}}</td>
                                <td>{{$app->emergency_contact['name_contact']}}</td>
                                <td>{{ empty($app['file_attachment_ktp']) ? '-' : 'Ada' }}</td>
                                <td>{{ empty($app['file_attachment_npwp']) ? '-' : 'Ada' }}</td>
                                <td>{{ empty($app['file_attachment_sallary_slip']) ? '-' : 'Ada' }}</td>
                                <td><a href="/qc/accept/{{$app['_id']}}/1" class="btn btn-success">Terima</a>
                                    <a href="/qc/accept/{{$app['_id']}}/0" class="btn btn-danger">Tolak</a></td>

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