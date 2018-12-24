@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Data Emergency Contact</div>
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Nama Kontak Darurat</td>
                            <td>Alamat</td>
                            <td>Nomor</td>
                            <td>Hubungan</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($emergency_contact as $contact)
                        <tr>
                            <td>{{$contact->applicationform->dataapplicant['name_applicant_basedonid'] ?? ''}}</td>
                            <td>{{$contact->name_contact}}</td>
                            <td>{{$contact->emergency_address}}</td>
                            <td>{{$contact->emergency_number}}</td>
                            <td>{{$contact->emergency_contact_relationship}}</td>
                            <td><a href="/emergency_contact/edit/{{$contact['_id']}}">Edit</a>
                                <a href="/emergency_contact/delete/{{$contact['_id']}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="/emergency_contact/add" class="btn btn-primary pull-right">Tambah Data</a>
                <button type="button" class="btn btn-primary" id="refreshbtn">Refresh Data</button>
            </div>
        </div>
    </div>
</div>
@endsection