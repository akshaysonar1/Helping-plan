<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\PinModel;
use App\Models\PinSalesUser;
use Exception;

class PinSaleController extends Controller
{
    public function pinsale(Request $request)
    {
        try {
           
            $pinsale = PinModel::where('id', $request->id)->first();
            
            $data = new PinSalesUser();

            $data->pin_id = $pinsale->id;
            $data->pin_ammount = $pinsale->pin_ammount;
            $data->sale_mobile = $request->sale_mobile;
            $data->sale_name = $request->sale_name;
            $data->sell_pin_status = '1';
            $data->provide_help_amount = $pinsale->provide_help_ammount;
             
            $data->pin_help_amount = $pinsale->get_help_ammount;

            $data->save();

            $change = PinModel::where('id', $request->id)->first();
            $change->pin_sell_status = $data->sell_pin_status;
            $change->update();

            // return redirect('admin/genratepin');
            return redirect()->back()->with('message', 'Pin Sold');
        } catch (exception $e) {
            return view('404');
        }
    }
}