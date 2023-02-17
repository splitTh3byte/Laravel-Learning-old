<?php

namespace user_crud_system\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests;
//use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function showUsers(){

        $male = DB::table('users')->where('gender', '=',1)->count();
        $female=DB::table('users')->where('gender', '=',0)->count();
        $countAllUsers=DB::table('users')->count();
        $DateofBirth=DB::select('select birthdate from users');
         $countAge18=0;
        foreach ($DateofBirth as $birthdate){
            $date = $birthdate->birthdate;
            $today = date("Y-m-d");
            $diff = date_diff(date_create($date), date_create($today));
            $age=$diff->format('%y');
            if($age>='18'){
                $countAge18++;
            }
        }
        return view('public',['users'=>$countAllUsers,'male'=>$male,'female'=>$female,'age'=>$countAge18]);


    }
}
