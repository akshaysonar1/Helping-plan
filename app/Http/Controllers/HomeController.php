<?php

namespace App\Http\Controllers;

use App\Models\admin\NoteModel;
use App\Models\admin\PinModel;
use App\Models\transection;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     //dashboard page view
    public function index(Request $request)
    {
        $store = NoteModel::first();
        $pinData = PinModel::whereDate('created_at', Carbon::today())->get();
        return view('admin.dashboard',compact('store','pinData'));
    }

    //this funtion store the note 
    public function storenote(Request $request)
    {
        $validatedData = $request->validate([
            'note' => 'required|string',
        ]);
        if (NoteModel::find($request->Noteid)) {
            // Update the existing record
            $store = NoteModel::find($request->Noteid);
            $store->note = $validatedData['note'];
            $store->save();
            return redirect()->back()->with('message',"Note Updated Sucessfully");
        } else {
            // Create a new record
            $store = new NoteModel;
            $store->note = $validatedData['note'];
            $store->save();
            return redirect()->back()->with('message',"Note Added Sucessfully");
        }
    }

    // this function use to search data in dashboard 
    public function dashboardPinData(Request $request)
    {
        $currency = $request->input('currency'); 
        $countdata = $request->input('total'); 
        $filter = PinModel::get();
        if (isset($currency) && !empty($currency)) {
            $filterData = $filter->where('pin_ammount', $currency);
        }
        if (isset($countdata) && !empty($countdata)) {
            $filterData = $filterData->take($countdata);
        }
        $data = $filterData;
        $store = NoteModel::first();
        // $pinData = PinModel::whereDate('created_at', Carbon::today())->get();
        return view('admin.dashboard',compact('data','store'));
    }

    //This function use For fetch data 
    public function HelpSwitch()
    {
      
        $data = PinModel::join('users', 'users.id', '=', 'pin_genrate_tabel.pin_sale_user_id')->get();
       
          
            return view('admin.helpswitch', compact('data'));
         
    }

    // This Funcion Use for activate and deactivate 
    public function UserStatus($data)
    {
      
        // $user = User::find($data);
        // if ($user->status == '1') {
        //     $user->status = '0';
        // } else {
        //     $user->status = '1';
        // }
        // $user->save();

        $change = PinModel::where('pin_number', '=', $data)->first();
     
        if ($change->pin_status == '0') {
            $change->pin_status = '1';
        } else {
            $change->pin_status = '0';
        }
        $change->update();
        
        $updated = transection::where('pin_number', '=', $data)->first();
     
        if ($updated->tran_status == '0') {
            $updated->tran_status = '2';
        } else {
            $updated->tran_status = '0';
        }
        $updated->update();
        return redirect()->route('helpswitch')->with('success', 'User Updated');

    }

}