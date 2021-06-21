<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequeast;
use Illuminate\Support\Facades\Session;

//use App\Http\Controllers;

class UserController extends Controller
{
    // public function index()
    // {
    //     $this->data['users']=User::all();
    //     return view('users.user',$this->data);
    // }
    // public function create()
    // {
    //     # code...
    //     $this->data['mode']='create';
    //     $this->data['groups']=Group::groupArray();
    //     return view('users.create',$this->data);
    // }
    // public function store(CreateUserRequeast $request)
    // {
    //    // $group=$request->group_id;
    //    $data= $request->all();

    //    if ( User::create($data)) {
    //     Session::flash('message',"User Created Successfully..");
    //  }
    //  else {
    //      Session::flash('message',"User  not Created .");
    //  }

    //  return redirect()->to('users');
    // }
    // public function edit($id)
    // {
    //     $this->data['groups']=Group::groupArray();
    //     $this->data['user']= User::findOrFail($id);
    //     $this->data['mode']='edit';
    //     return view('users.create',$this->data);
    // }
    // public function update( Request $request,$id)
    // {
    //    $data=$request->all();

    //    $user=User::find($id);
    //    $user->group_id=$data['group_id'];
    //    $user->name=$data['name'];
    //    $user->phone=$data['phone'];
    //    $user->email=$data['email'];
    //    $user->address=$data['address'];


    //    if ( $user->save()) {
    //     Session::flash('message',"User Updated Successfully..");
    //  }
    //  else {
    //      Session::flash('message',"User  not Updated .");
    //  }
    //  return redirect()->to('users');

    // }
    // public function destroy($id)
    // {
    //     $this->data['user']= User::findOrFail($id);
    //     if ( User::find($id)->delete()) {
    //         Session::flash('message',"User Deleted Successfully..");
    //      }
    //      else {
    //          Session::flash('message',"User  Delet .");
    //      }
    //      return redirect()->to('users');
    // }
}
