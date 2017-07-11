<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getAllCustomers(){
      $customers = DB::table('customers')->get();
      return view('customers', ['customers' => $customers]);
    }

    public function getCustomer($id){
      return "Le client s'appelle " . $id;
    }

    public function addCustomer(){}

    public function deleteCustomer(){}

    public function updateCustomer(){}


}
