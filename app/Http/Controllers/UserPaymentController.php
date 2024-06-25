<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    public function index($id){
        $this->data['user'] = User::find($id);
        
        return view('users.sales.payment',$this->data);
    }
}