<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\applicationform;
use App\emergency_contact;
use App\dataapplicant;
use App\tenor;
use App\company;
use App\qc;
class HomeController extends Controller
{
    public function index()
    {
        $application_form = applicationform::all();
        return view('welcome',['application_form' => $application_form]);
    }
    public function application_form_add(){
        return view('application_form.add');
    }
    public function application_form_edit($id){
        $app = applicationform::find($id);
        return view('application_form.edit',['app' => $app]);
    }
    public function application_form_add_post(Request $request){
        $app = new applicationform;
        $app->kode_peminjaman = $request->kode_peminjaman;
        $app->load_tenor = $request->load_tenor;
        $app->nama_sales = $request->nama_sales;
        $app->date_and_time = $request->tanggal_waktu;
        $app->file_attachment_ktp = $request->file_ktp;
        $app->file_attachment_npwp = $request->file_npwp;
        $app->file_attachment_sallary_slip = $request->file_slipgaji;
        $app->save();
        return redirect('/');
    }
    public function application_form_edit_post($id,Request $request){
        $app = applicationform::find($id);
        $app->kode_peminjaman = $request->kode_peminjaman;
        $app->load_tenor = $request->load_tenor;
        $app->nama_sales = $request->nama_sales;
        $app->date_and_time = $request->tanggal_waktu;
        $app->file_attachment_ktp = $request->file_ktp;
        $app->file_attachment_npwp = $request->file_npwp;
        $app->file_attachment_sallary_slip = $request->file_slipgaji;
        $app->save();
        return redirect('/');
    }
    public function application_form_delete($id){
        $app = applicationform::find($id);
        $app->delete();
        return redirect('/');
    }

    public function emergency_contact()
    {
        $emergency_contact = emergency_contact::all();
        return view('emergency_contact.index',['emergency_contact' => $emergency_contact]);
    }
    public function emergency_contact_add(){
        $appl = dataapplicant::all();
        return view('emergency_contact.add',['data_applicant' => $appl]);
    }
    public function emergency_contact_edit($id){
        $appl = dataapplicant::all();
        $app = emergency_contact::find($id);
        return view('emergency_contact.edit',['app' => $app,'data_applicant' => $appl]);
    }
    public function emergency_contact_add_post(Request $request){
        $app = new emergency_contact;
        $app->application_form_id = $request->nama;
        $app->name_contact = $request->nama_darurat;
        $app->emergency_address = $request->alamat;
        $app->emergency_number = $request->nomor_darurat;
        $app->emergency_contact_relationship = $request->hubungan;

        $app->save();
        return redirect('/emergency_contact');
    }
    public function emergency_contact_edit_post($id,Request $request){
        $app = emergency_contact::find($id);
        $app->application_form_id = $request->nama;
        $app->name_contact = $request->nama_darurat;
        $app->emergency_address = $request->alamat;
        $app->emergency_number = $request->nomor_darurat;
        $app->emergency_contact_relationship = $request->hubungan;

        $app->save();
        return redirect('/emergency_contact');
    }
    public function emergency_contact_delete($id){
        $app = emergency_contact::find($id);
        $app->delete();
        return redirect('/emergency_contact');
    }
    public function data_applicant()
    {

        $dataapplicant = dataapplicant::with('applicationform')->get();
        return view('data_applicant.index',['data_applicant' => $dataapplicant]);
    }
    public function data_applicant_add(){
        $application_form = applicationform::all();

        return view('data_applicant.add',['application_form' => $application_form]);
    }
    public function data_applicant_edit($id){
        $appl = dataapplicant::find($id);
        $application_form = applicationform::all();

        return view('data_applicant.edit',['appl' => $appl,'application_form' => $application_form]);
    }
    public function data_applicant_add_post(Request $request){
        $app = new dataapplicant;
        $app->id_number_ktp = $request->no_ktp;
        $app->name_applicant_basedonid = $request->nama;
        $app->current_address = $request->alamat;
        $app->number_phone = $request->no_hp;
        $app->email = $request->email;
        $app->length_of_work = $request->lama_jamkerja;
        $app->status_of_residence = $request->status;
        $app->application_form_id = $request->kode_peminjaman;
        $app->save();
        return redirect('/data_applicant');
    }
    public function data_applicant_edit_post($id,Request $request){
         $app = dataapplicant::find($id);
        $app->id_number_ktp = $request->no_ktp;
        $app->name_applicant_basedonid = $request->nama;
        $app->current_address = $request->alamat;
        $app->number_phone = $request->no_hp;
        $app->email = $request->email;
        $app->length_of_work = $request->lama_jamkerja;
        $app->status_of_residence = $request->status;
        $app->application_form_id = $request->kode_peminjaman;
        $app->save();
        return redirect('/data_applicant');
    }
    public function data_applicant_delete($id){
        $app = dataapplicant::find($id);
        $app->delete();
        return redirect('/data_applicant');
    }
    public function tenor()
    {

        $tenor = tenor::with('applicationform')->get();
        return view('tenor.index',['tenor' => $tenor]);
    }
    public function tenor_add(){
        $application_form = applicationform::with('dataapplicant')->get();
        return view('tenor.add',['application_form' => $application_form]);
    }
    public function tenor_edit($id){
        $appl = tenor::find($id);
        $application_form = applicationform::all();

        return view('tenor.edit',['appl' => $appl,'application_form' => $application_form]);
    }
    public function tenor_add_post(Request $request){
        $app = new tenor;
        $app->application_form_id = $request->kode_peminjaman;
        $app->amount_of_loan = $request->jumlah;
        $app->number_rekening_transfer = $request->no_rek;
        $app->length_of_loan = $request->jatuh_tempo;
        $app->save();
        return redirect('/tenor');
    }
    public function tenor_edit_post($id,Request $request){
         $app = tenor::find($id);
        $app->amount_of_loan = $request->jumlah;
        $app->number_rekening_transfer = $request->no_rek;
        $app->length_of_loan = $request->jatuh_tempo;
        $app->save();
        return redirect('/tenor');
    }
    public function tenor_delete($id){
        $app = tenor::find($id);
        $app->delete();
        return redirect('/tenor');
    }
     public function company()
    {

        $company = company::with('applicationform')->get();
        return view('company.index',['company' => $company]);
    }
    public function company_add(){
        $application_form = applicationform::with('dataapplicant')->get();
        return view('company.add',['application_form' => $application_form]);
    }
    public function company_edit($id){
        $appl = company::find($id);
        $application_form = applicationform::all();

        return view('company.edit',['appl' => $appl,'application_form' => $application_form]);
    }
    public function company_add_post(Request $request){
        $app = new company;
        $app->application_form_id = $request->kode_peminjaman;
        $app->name_company = $request->nama_perusahaan;
        $app->company_address = $request->alamat_perusahaan;
        $app->company_phone_number = $request->no_perusahaan;
        $app->job_position = $request->posisi;
        $app->division_of_work = $request->divisi_perusahaan;
        $app->save();
        return redirect('/company');
    }
    public function company_edit_post($id,Request $request){
         $app = company::find($id);
        $app->amount_of_loan = $request->jumlah;
        $app->number_rekening_transfer = $request->no_rek;
        $app->length_of_loan = $request->jatuh_tempo;
        $app->save();
        return redirect('/company');
    }
    public function company_delete($id){
        $app = company::find($id);
        $app->delete();
        return redirect('/company');
    }
    public function qc()
    {
        $application_form = applicationform::all();
        return view('QC.index',['application_form' => $application_form]);
    }
    public function qc_accept($id,$status){
        $qc = qc::where('application_form_id',$id)->first();
        if(empty($qc))
        $qc = new qc;
        $qc->application_form_id = $id;
        if($status == 1)
        $qc->status_form = "Diterima";
        else
        $qc->status_form = "Ditolak";
        $qc->save();
        return redirect()->back();
    }
    public function report(){
        $application_form = applicationform::all();
        return view('report.index',['application_form' => $application_form]);
    }
}
