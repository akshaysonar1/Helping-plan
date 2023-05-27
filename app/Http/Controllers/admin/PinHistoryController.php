<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\PinModel;
use App\Models\transection;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class PinHistoryController extends Controller
{
    //THis Function use for Filters Data in datatablr 
    public function SearchPin(Request $request)
    {
        $currency = $request->input('currency'); //amount
        $countdata = $request->input('total'); //total
        $startDate = $request->input('start_date'); //start date 
        $endDate = $request->input('end_date'); //end date
        $pinData = $request->input('pin'); //pin
   
        $filter = PinModel::join('users', 'users.id', '=', 'pin_genrate_tabel.pin_sale_user_id');
        $date = transection::get();

        //serch with amount 
        if (isset($currency) && !empty($currency)) {
            $filter = $filter->where('pin_ammount', $currency);
        }
       //serch with pin nimber 
        if (isset($pinData) && !empty($pinData)) {
            $filter = $filter->where('pin_number', $pinData);
        }
        //serch with date
        if (isset($startDate) && !empty($startDate)) {
            $filter =  $filter->whereDate('pin_sale_date', '>=', date('Y-m-d',strtotime($startDate)));
        }
        
        if (isset($endDate) && !empty($endDate)) {
            $filter =  $filter->whereDate('pin_sale_date', '<=', date('Y-m-d',strtotime($endDate)));
        }
        //serch with vount
        if (isset($countdata) && !empty($countdata)) {
            $filter = $filter->take($countdata);
        }
        $data = $filter->get();

        return view('admin.pinhistory', compact('data'));

    }

}