<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
     return view('loginView');
    }
    public function verify(AdminRequest $request)
    {

        $user= $request->all();
        // return $this->data;
        // $data= $request->all();
     // echo $user;
        // return $request->name;
        $admin= Admin::all()->where('name', $request->name)
                        ->where('password', $request->password)
                        ->first();
        
      //  return $admin;
    //     // ->where('name',$request->name)->where('password',$request->password);
    //    // echo $result;
        if ( $admin!=null) {
            return redirect()->to('admins');
            # code...
        }
        else{
            Session::flash('msg',"User  not found .");
            return view('loginView');

        }
    //  //  return view('layout.main');

    }
}