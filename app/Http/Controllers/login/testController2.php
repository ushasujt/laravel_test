<?php

namespace App\Http\Controllers\about;

use Illuminate\Http\Request;

class testController2 extends Controller
{
    public function mytest2(){
       return view('testview2', [
                'testvariable' => 'Ushas Joseph',
            ]);
   }
}
