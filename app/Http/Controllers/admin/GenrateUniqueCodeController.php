<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\PinModel;
use App\Models\PinSalesUser;
use App\Models\pin_genrate_tabel;
use Exception;

class GenrateUniqueCodeController extends Controller
{
    //This function use for fetch the data 
    public function generateUniqueCode()
    {

        try {
            $data = PinSalesUser::rightJoin('pin_genrate_tabel', 'pin_genrate_tabel.id', '=', 'pin_sales_users.pin_id')
                // ->orderBy('pin_genrate_tabel.created_at', 'desc')
                ->get();
           
            return view('admin.genratepin', compact('data'));
        } catch (exception $e) {
            return view('404');
        }
    }

    // This function use for store the random pin 
    public function storepin(Request $request)
    {
      
            $j = $request->total_pin;
            for ($i = 1; $i <= $j; $i++) {
                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];
                $newPin = new PinModel();
                $newPin->pin_number = $pin;
                $newPin->pin_ammount = $request->pin_ammount;
                $newPin->total_pin = $request->total_pin;
                $newPin->pin_sell_status = '0';
                $newPin->save();
            }

            return redirect()->back()->with('message',"Your Pin Has Been Generated. Thank you!");
         
    }
}