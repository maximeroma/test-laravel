<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;
use DateTime;

class CustomerController extends Controller
{
    public function getAllCustomers(){
      $customers = DB::table('customers')->get();
      return view('customers', ['customers' => $customers]);
    }

    public function getCustomer($id){
      $customer = DB::table('customers')->where('id', $id)->get();
      return view('customer_detail', ['customer' => $customer]);
    }

    public function addCustomer(Request $request){

      $customer = new Customer();


      $first_name = $request->input('first_name');
      $last_name = $request->input('last_name');
      $email = $request->input('email');
      DB::table('customers')->insert([
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'created_at' => new DateTime(),
      ]);
      return redirect('/customers');
    }

    public function deleteCustomer($id){
      DB::table('customers')->where('id', $id)->delete();
      return redirect('/customers');
    }

    public function updateCustomer(){}


}
