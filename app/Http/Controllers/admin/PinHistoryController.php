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
    public function SearchPin(Request $request)
    {


        $currency = $request->input('currency'); //amount
        $countdata = $request->input('total'); //total
        $startDate = $request->input('start_date'); //start date 
        $endDate = $request->input('end_date'); //end date
        $pinData = $request->input('pin'); //pin


        $filter = PinModel::join('users', 'users.id', '=', 'pin_genrate_tabel.pin_sale_user_id');
        $date = transection::get();

        if (isset($currency) && !empty($currency)) {
            $filter = $filter->where('pin_ammount', $currency);
        }
        if (isset($pinData) && !empty($pinData)) {
            $filter = $filter->where('pin_number', $pinData);
        }
        if (!empty($startDate) || !empty($endDate)) {
 
            $filter = $filter->whereDate('pin_sale_date', '<=', date('Y-m-d h:i:s',strtotime($request->start_date)))
            ->whereDate('pin_sale_date', '>=', date('Y-m-d h:i:s',strtotime($request->end_date)));       

        }
     
        if (isset($countdata) && !empty($countdata)) {
            $filter = $filter->take($countdata);
        }
        $data = $filter->get();
  

        return view('admin.pinhistory', compact('data'));

    }

}