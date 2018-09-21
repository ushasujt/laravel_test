<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TestRepository;

class testController extends Controller
{
   public function mytest(){  
            
       
      $this->testRepo = new TestRepository();
      $testData = $this->testRepo->getData();
      
       return view('testview', [
                'myname'=>'Ushas Joseph',
                'testData'=>$testData,
                'testData1'=>$testData,
            ]);
   }
}
