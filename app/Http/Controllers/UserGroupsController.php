<?php

namespace App\Http\Controllers;
use  App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use App\Models;
use Illuminate\Support\Facades\Session;
class UserGroupsController extends Controller
{
    //
    // public function index()
    // {
        # code...
    //     $this->data['groups']=Group::all();
    //     return view('groups/group',$this->data);
    // }
    // public function create()
    // {
    //     return view('groups.create');
    // }
    // public function store(Request $req)
    // {
    //     $titleData=$req->all();
    //     if (  Group::create($titleData)) {
    //        Session::flash('message',"Group Created Successfully..");
    //     }
    //     else {
    //         Session::flash('message',"Group  not Created .");
    //     }

    //     return redirect()->to('groups');
    //    //return  $titleData;
    // }
    // public function destory($id)
    // {

    //     if ( Group::find($id)->delete()) {
    //        Session::flash('message',"Group Deleted Successfully..");
    //     }
    //     else {
    //         Session::flash('message',"Group  not Deleted .");
    //     }

    //     return redirect()->to('groups');
    //    //return  $titleData;
    // }
}
