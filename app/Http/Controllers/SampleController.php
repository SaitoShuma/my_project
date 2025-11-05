<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller{
    public function index(Request $request){

        #$insertResult = DB::connection("mysql")->insert("insert into users (ID,email,name,password) values (1,'111@gmail.com','れんさ',111)");
        #$insertResult = DB::connection("mysql")->insert("insert into users (ID,email,name,password) values (2,'222@gmail.com','レンサ',222)");
        #$insertResult = DB::connection("mysql")->insert("insert into users (ID,email,name,password) values (3,'333@gmail.com','連鎖',333)");
        #dd($insertResult);

        $deleteResult = DB::connection("mysql")->delete("delete from users where ID IN (2, 3)");
    }
}