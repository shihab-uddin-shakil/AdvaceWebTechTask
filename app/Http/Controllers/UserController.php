<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

 public function index(){

    }

//     public function create(){
//         return view('user.create');
//     }
//     public function createData(Request $req){
//        $users = $this->getUserList();
//         // $ide=$req->$idnumber;
//         $users = [];
//         $ide=4;
//        $username= $req->uname;
//        $password=$req->password;
//        $REpassword=$req->repass;
//        $email=$req->email;
//       $user=[['id'=>4, 'username'=>$username, 'password'=>$password, 'email'=>$email, 'type'=>'admin']];
//       if($password==$REpassword){

//         $us=array_merge($this->getUserList(),$user);
//         //$this->getUserList()->array_merge($us,$user);
//         //$this->getUserList()==$us;
//          //echo"successfull";
//         // echo dd( $us);
//         //$new = new getUserList();
//         $this->getUserList()->push($us);
//          //return view('user.userlist')->with('userlist', $us);
//          return $us;
//       }
//       else{
//          echo"error";
//       }
//     }

//     public function details($id){

//         $users = $this->getUserList();
//         $user = '';

//         foreach($users as $u){
//             if($u['id'] == $id){
//                 $user = $u;
//                 break;
//             }
//         }
//         //$user= ['id'=>1, 'name'=>'alamin', 'password'=>'123', 'email'=>'aa@aiub.edu','type'=>'user'];
//         return view('user.details')->with('user', $user);
//     }

//     public function edit($id){
//         echo $id;
//     }

//     public function update(Request $req, $id){
//         echo $id;
//     }

//     public function delete($id){
//         echo $id;
//     }

//     public function destroy($id){
//         echo $id;
//     }

//     public function list(){
//         $users = $this->getUserList();

//         // $user= $this->createData( Request $req);
//         // $users=array_push($users,$user);
//         return view('user.userlist')->with('userlist', $users);
//     }

//     public function getUserList(){
//         return [
//             ['id'=>1, 'username'=>'shihab', 'password'=>'123', 'email'=>'email@aiub.edu', 'type'=>'admin'],
//             ['id'=>2, 'username'=>'uddin', 'password'=>'223', 'email'=>'xyz@aiub.edu', 'type'=>'admin'],
//             ['id'=>3, 'username'=>'shakil', 'password'=>'124453', 'email'=>'abc@aiub.edu', 'type'=>'admin'],
//         ];
//     }
// }
public function create(){
    return view('user.create');
}

public function details($id){

    $users = $this->getUserList();
    $user = '';

    foreach($users as $u){
        if($u['id'] == $id){
            $user = $u;
            break;
        }
    }
    //$user= ['id'=>1, 'name'=>'alamin', 'password'=>'123', 'email'=>'aa@aiub.edu','type'=>'user'];
    return view('user.details')->with('user', $user);
}

public function edit($id){
    echo $id;
}

public function update(Request $req, $id){
    echo $id;
}

public function delete($id){
    echo $id;
}

public function destroy($id){
    echo $id;
}

public function list(){
    $users = $this->getUserList();
    return view('user.userlist')->with('userlist', $users);
}

public function getUserList(){
    return [
        ['id'=>1, 'username'=>'alamin', 'password'=>'123', 'email'=>'email@aiub.edu', 'type'=>'admin'],
        ['id'=>2, 'username'=>'xyz', 'password'=>'223', 'email'=>'xyz@aiub.edu', 'type'=>'admin'],
        ['id'=>3, 'username'=>'abc', 'password'=>'124453', 'email'=>'abc@aiub.edu', 'type'=>'admin'],
    ];
}
}
