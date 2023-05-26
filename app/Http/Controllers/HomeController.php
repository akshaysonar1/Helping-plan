<?php

namespace App\Http\Controllers;

use App\Models\admin\PinModel;
use App\Models\transection;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;

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
    public function index()
    {
        return view('layouts.master');
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