<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Education;
use App\Models\Job;
use App\Models\Service;
use App\Models\Media;
use App\Models\Purpose;
use App\Models\Transaction;
use PDF;

class CustController extends Controller
{
    public function getAllCustomer(){
        $pelanggan = Customer::all();
        return view('customer',compact('pelanggan'));
    }

    public function downloadPDF() {
        $pelanggan = Customer::all();
        $pdf = PDF::loadView('customer',compact('pelanggan'));
        return $pdf->stream('customer.pdf');
    }

    public function getAllReport(){
        $pelanggan = Customer::all();
        $job = Job::all();
        $customer = Customer::count();
        $asn = Customer::where('id_job', '=', 1)->count();
        $student= Customer::where('id_job', '=', 2)->count();
        $lecturer = Customer::where('id_job', '=', 3)->count();
        $researcher = Customer::where('id_job', '=', 4)->count();
        $general_job = Customer::where('id_job', '=', 5)->count();

        $pendidikan = Education::all(); 
        $education = Education::count();
        $smp = Customer::where('id_education', '=', 1)->count();
        $sma = Customer::where('id_education', '=', 2)->count();
        $diploma = Customer::where('id_education', '=', 3)->count();
        $sarjana = Customer::where('id_education', '=', 4)->count();
        $magister = Customer::where('id_education', '=', 5)->count();
        $doktor = Customer::where('id_education', '=', 6)->count();

        $service = Service::count();
        $service1 = Transaction::where('id_service', '=', 1)->count();
        $service2 = Transaction::where('id_service', '=', 2)->count();
        $service3 = Transaction::where('id_service', '=', 3)->count();
        $service4 = Transaction::where('id_service', '=', 4)->count();
        $service5 = Transaction::where('id_service', '=', 5)->count();

        $media = Media::count();
        $media1 = Transaction::where('id_media', '=', 1)->count();
        $media2 = Transaction::where('id_media', '=', 2)->count();
        $media3 = Transaction::where('id_media', '=', 3)->count();
        $media4 = Transaction::where('id_media', '=', 4)->count();
        $media5 = Transaction::where('id_media', '=', 5)->count();

        $purpose = Purpose::count();
        $purpose1 = Transaction::where('id_purpose', '=', 1)->count();
        $purpose2 = Transaction::where('id_purpose', '=', 2)->count();
        $purpose3 = Transaction::where('id_purpose', '=', 3)->count();
        $purpose4 = Transaction::where('id_purpose', '=', 4)->count();
        $purpose5 = Transaction::where('id_purpose', '=', 5)->count();
        
        return view('report',compact('pelanggan','job','customer','asn','student','lecturer','researcher','general_job',
        'pendidikan','education','smp','sma','diploma','sarjana','magister','doktor',
        'service','service1','service2','service3','service4','service5',
        'media','media1','media2','media3','media4','media5',
        'purpose','purpose1','purpose2','purpose3','purpose4','purpose5'));
    }

    public function downloadPDFReport(Request $request) {
        $startDate = $request->dariGenerate;
        $endDate = $request->sampaiGenerate;
        $pelanggan = Customer::all();
        $job = Job::all();
        $customer = Customer::whereDate('created_at', '>=', $startDate)
        ->whereDate('created_at', '<=', $endDate)
        ->count();
        
        $asn = Customer::where('id_job', '=', 1)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $student= Customer::where('id_job', '=', 2)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $lecturer = Customer::where('id_job', '=', 3)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $researcher = Customer::where('id_job', '=', 4)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $general_job = Customer::where('id_job', '=', 5)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $pendidikan = Education::all(); 
        $education = Education::whereDate('created_at', '>=', $startDate)
        ->whereDate('created_at', '<=', $endDate)
        ->count();
        $smp = Customer::where('id_education', '=', 1)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $sma = Customer::where('id_education', '=', 2)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $diploma = Customer::where('id_education', '=', 3)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $sarjana = Customer::where('id_education', '=', 4)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $magister = Customer::where('id_education', '=', 5)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $doktor = Customer::where('id_education', '=', 6)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $service = Service::whereDate('created_at', '>=', $startDate)
        ->whereDate('created_at', '<=', $endDate)
        ->count();
        $service1 = Transaction::where('id_service', '=', 1)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $service2 = Transaction::where('id_service', '=', 2)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $service3 = Transaction::where('id_service', '=', 3)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $service4 = Transaction::where('id_service', '=', 4)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $service5 = Transaction::where('id_service', '=', 5)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $media = Media::whereDate('created_at', '>=', $startDate)
        ->whereDate('created_at', '<=', $endDate)
        ->count();
        $media1 = Transaction::where('id_media', '=', 1)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $media2 = Transaction::where('id_media', '=', 2)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $media3 = Transaction::where('id_media', '=', 3)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $media4 = Transaction::where('id_media', '=', 4)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $media5 = Transaction::where('id_media', '=', 5)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $purpose = Purpose::whereDate('created_at', '>=', $startDate)
        ->whereDate('created_at', '<=', $endDate)
        ->count();
        $purpose1 = Transaction::where('id_purpose', '=', 1)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();
       
        $purpose2 = Transaction::where('id_purpose', '=', 2)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $purpose3 = Transaction::where('id_purpose', '=', 3)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $purpose4 = Transaction::where('id_purpose', '=', 4)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->count();

        $purpose5 = Transaction::where('id_purpose', '=', 5)
         ->whereDate('created_at', '>=', $startDate)
         ->whereDate('created_at', '<=', $endDate)
         ->count();

        $transaction = Transaction::whereDate('created_at', '>=', $startDate)
        ->whereDate('created_at', '<=', $endDate)
        ->count();

        $pdf = PDF::loadView('report',compact(
        'pelanggan','job','customer','asn','student','lecturer','researcher','general_job',
        'pendidikan','education','smp','sma','diploma','sarjana','magister','doktor',
        'service','service1','service2','service3','service4', 'service5',
        'media','media1','media2','media3','media4','media5',
        'purpose','purpose1','purpose2','purpose3','purpose4','purpose5','transaction' 
        ));
        return $pdf->stream('report.pdf');
    }

}