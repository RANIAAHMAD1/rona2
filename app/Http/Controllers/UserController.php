<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function showAdminName(): string
    {

        return 'rania salah';



    }

    public function getIndex(){
      //  $obj = new \stdClass();

      //  $obj->name='ahmad';
      //  $obj->id=5;
      //  $obj->gender='male';
       // return view('welcome',compact('obj'));
        $data=[ ];
       // return view('welcome')->with('name','rania omar');
         return view('welcome',compact('data'))->with('name','$data');



    }



}
