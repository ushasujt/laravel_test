<?php

namespace App\Repositories;

use App\Models\test1;
//use DB;
class TestRepository {   
    
     public function __counstruct(){        
       
     }
    
     public function getData(){
        $testData = test1::where ('name' , 'ushas')->first()->toArray(); 
       // $testData = DB::table('test1')->get();
       // $testData = $testData ? $testData->toArray() : [];
        //dd($testData->to);
     // echo '<pre>';  print_r($testData);exit;
        return $testData;
     }
  
    
    
}
