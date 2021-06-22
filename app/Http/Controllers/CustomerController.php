<?php

namespace App\Http\Controllers;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
       return view('users.signup');
    }
    public function signup(CustomerRequest $request)
    {
        $data= $request->all();

       if ( Customer::create($data)) {
        Session::flash('msg',"User Created Successfully..");
     }
     else {
         Session::flash('msg',"User  not Created .");
     }

     return redirect()->to('/');
    }

    public function customer()
    {
        $this->data['products']=Product::all();
       return view('users.plist',$this->data);
    }
    public function addp()
    {
       return view('users.sell');
    }
    public function addnp(ProductRequest $request)
    {
        $data= $request->all();
        if ( Product::create($data)) {
            Session::flash('message',"product Created Successfully..");
         }
         else {
             Session::flash('message',"product  not Created .");
         }
         return redirect()->to('customer');
    }
}