<?php

namespace App\Http\Controllers;
use App\Models\Question;


use Illuminate\Http\Request;

class TestSkillController extends Controller
{
    //
    public function Test($id){
       $question = Question::where('id',$id)->first(); 
       if($question ){
           $question->answer='hidden';
           return $question;

       }
       else{
           return 'qstn not found';

       }

    }
    public function Answer($q_id,$answer){
        $question = Question::where('id',$q_id)->where('answer',$answer)->first();
      
        if($question ){
         
           return 'answer is correct';
        }
        else{
            return 'Wrong answer';
 
        }


    }
    
}
