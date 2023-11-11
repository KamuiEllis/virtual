<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function customers(Request $request) {
        $customers = Customer::orderBy("id","desc")->get();
        return view("customers", ['customers' => $customers]);
    }

    public function search(Request $request) {
        $inputs = $request->validate([
            'text' => [],
        ]);

        $customers = Customer::search($inputs['text'])->get();
        return view("customers", ['customers' => $customers]);
    }

}
