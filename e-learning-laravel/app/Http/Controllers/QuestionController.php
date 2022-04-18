<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function getAll()
    {
        return Question::all();
    }

    public function getOne($id)
    {
        return Question::where('id', $id)->first();
    }

    public function addOne(Request $req)
    {
        $question = new Question();
        $question->question = $req->question;
        $question->answer = $req->answer;
        $question->options = $req->options;
        $question->save();
        return $question;
    }

    public function update(Request $req)
    {
        $question = Question::where('id', $req->id)->first();
        if (!$question) return "question not found";
        $question->question = $req->question;
        $question->answer = $req->answer;
        $question->options = $req->options;
        $question->save();
        return $question;
    }

    public function deleteOne($id)
    {
        Question::where('id', $id)->delete();
        return "Deleted";
    }
}
