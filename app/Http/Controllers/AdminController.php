<?php

namespace user_crud_system\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    public function getAllUsers(){

        $users=DB::select('select * from users');
        return view('home',['users'=>$users]);


    }

    public  function newUser(Request $request)
    {
        $email =$request->input('email');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $name = $firstname." ".$lastname;
        $password=bcrypt($request->input('password')) ;
        $dateofBirth =$request->input('birth');
        $gender =$request->input('gender');
        $created=date('Y-m-d');
        $data=array('name'=>$name,'firstname'=>$firstname,'lastname'=>$lastname,'birthdate'=>$dateofBirth,'gender'=>$gender,'email'=>$email,
            'password'=>$password,'created_at'=>$created);
        DB::table('users')->insert($data);
        return redirect('home/');

    }

    public function edit( Request $request ,$id){

        $email =$request->input('email');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $update_at=date('Y-m-d H-m-s');
        $name=$firstname." ".$lastname;


        DB::update('update users set name=?,email = ?,firstname=? ,lastname=?,updated_at= ? where id = ?',[$name,$email,$firstname,$lastname,$update_at,$id]);
        return redirect('home');

}
  public function delete($id){

        DB::delete('delete from users where id=?',[$id]);
      return redirect('home');

  }


}
