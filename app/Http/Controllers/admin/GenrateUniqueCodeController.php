<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\PinModel;

class GenrateUniqueCodeController extends Controller
{
    //This function use for fetch the data 
    public function generateUniqueCode()
    {
        $data = PinModel::orderBy('updated_at')->get();
        return view('admin.genratepin',compact('data'));
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
            $newPin->save();
        }
        return redirect()->back();
    }
}
