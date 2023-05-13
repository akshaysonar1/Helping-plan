<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\PinModel;
use Illuminate\Http\Request;
use App\Models\User;

class PinHistoryController extends Controller
{
    public function SearchPin(Request $request)
    {
        // dd($request->all());
    
        $currency = $request->input('currency'); //amount
        $countdata = $request->input('total'); //total
        $startDate = $request->input('start_date'); //start date 
        $endDate = $request->input('end_date'); //end date
        $pinData = $request->input('pin'); //pin


        $filter = new PinModel();
        if (isset($currency) && !empty($currency)) {
            $filter = $filter->where('pin_ammount', $currency);
        }
        if (isset($pinData) && !empty($pinData)) {
            $filter = $filter->where('pin_number', $pinData);
        }
        if (!empty($startDate) || !empty($endDate)) {
            $filter = $filter->where('created_at', '>=', $startDate)->where('created_at', '<=', $endDate);
        }

        if (isset($countdata) && !empty($countdata)) {
            $filter = $filter->take($countdata);
        }

        $data = $filter->get();
        //    if(!empty($currency)){
        //     $data= $filter->where('pin_ammount', $currency);
        //    }
        //    if(!empty($currency)){
        //     $data= $filter->where('pin_ammount', $currency);
        //    }
        // dd($data);
        // $filter = PinModel::orderBy('id', 'asc')->take($countdata)->get();

        // $data = $filter;
        // $data = PinModel::where('pin_ammount', $currency)->orderBy('id', 'asc')->take($countdata)->get();
           
        return view('admin.pinhistory', compact('data'));
    }
    
}
