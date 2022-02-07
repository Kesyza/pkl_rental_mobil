<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class ApiController extends Controller
{
    public function dataCustomer(){
        $customer = Customer::all();
        
        //ubah ke JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Customer',
            'data'    => $customer  
        ], 200);
    }
}
