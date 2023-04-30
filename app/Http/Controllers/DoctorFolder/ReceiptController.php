<?php

namespace App\Http\Controllers\DoctorFolder;

use App\Http\Controllers\Controller;
use App\Models\Receipt;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceiptController extends Controller
{
    public $number_receipt;


    public function getReceipts(){
//        $rec = DB::table('receipts')->paginate(10);
        return view('doctorINT.receiptsDoctor');
    }


    public function getReceiptPage(){
//        $rec = DB::table('receipts')->paginate(10);
        return view('doctorINT.recept_pageDoctor');
    }


    public  function getNotifications(){
        return view('doctorINT.notification');
    }

    public function getUserProfile(){
        return view('doctorINT.user_profile');
    }

    public function setReceipt(){
        return view('doctorINT.give_recept');
    }

    public function setMedicines(){
        return view('doctorINT.medicinesDoctor');
    }

    public function qrCode(){
        return view('doctorINT.qr');
    }

    public function index(Request $request){
        $id = $request->employee_id;
        $name = $request->full_name;
        $iin = $request->IIN;
        $avatar = $request->avatar;
        return view('doctor.reciept',['id' => $id, 'name' => $name, 'iin'=>$iin,'avatar'=> $avatar]);
    }

    public function addReciept(Request $request){
        $receipt = \App\Models\Receipt::create([
            'receipt_title' => $request->receipt_title,
            'receipt_comments' => $request->receipt_comments,
            'receipt_date' => $request->expired_date,
            'receipt_doctor_id' => $request->doctor,
            'receipt_user_id' => $request->patient
        ]);
        // return redirect()->route('doctor.search');
        return redirect()->action([ReceiptController::class, 'getMedicine'], ['id' => $receipt->id]);
    }

    public function getMedicine(Request $request){
        $data = DB::table('medicines')->paginate(10);
        $id = $request->id;
        return view('doctor.receipt.search', compact('data'))->with('receipt_id',$id);
    }

    public function addMedicine(Request $request){
        $medicine = $request->medicine_id;
        $receipt = $request->reciept_id;
        $data = DB::table('medicine_receipts')->insert([
            'medicine_id' => $medicine,
            'receipt_id' => $receipt
        ]);
        return redirect()->action([ReceiptController::class, 'getMedicine'], ['id' => $receipt]);

    }

    public function searchMedicine(Request $request){
        $data = DB::table('medicines');

        $data = $data->where('product_name', 'LIKE', "%" . $request->search . "%");

        $data = $data->paginate(10);
        return view('doctor.receipt.search', compact('data'));
    }
}
