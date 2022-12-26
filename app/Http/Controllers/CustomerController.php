<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function register()
    {
        return view('customer.register');
    }

    public function create(Request $request)
    {
        $data=$this->getCustomerData($request);
        Customer::create($data);
        return back()->with(['inputSuccess'=>'Register successfully.......']);

    }

    public function list()
    {
        $data=Customer::get();
        return view('customer.list')->with(['customer'=>$data]);
    }

    public function seeMore($id)
    {
        $data=Customer::where('customer_id',$id)->get()->toArray();
        return view('customer.seeMore')->with(['customer'=>$data]);
    }

    public function delete($id)
    {
        // Customer::where('customer_id',$id)->delete();
        // return back()->with(['deleteSuccess'=>'Customer data deleted.....']);
        dd($id);
    }

    private function getCustomerData($request)
    {
        return[
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->dateOfBirth
        ];
    }
}
