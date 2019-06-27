<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResource;
use App\Model\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        return QuestionResource::collection(Question::latest()->get());
    }

    public function store(Request $request,  Question $question)
    {
        Question::create($request->all());
        return response('Created',201);
    }

    public function show(Question $question)
    {
        return new QuestionResource($question);
    }

    public function update(Request $request, Question $question)
    {

        $question->update($request->all());

        return response('Updated',201);

    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response('Deleted',210);
    }
}
