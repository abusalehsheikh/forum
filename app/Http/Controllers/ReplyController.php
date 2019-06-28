<?php

namespace App\Http\Controllers;

use App\Model\Question;
use App\Model\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{

    public function index(Question $question)
    {
        return $question->replies;
//        return Reply::latest()->get();
    }

    public function create()
    {
        //
    }

    public function store(Question $question, Request $request)
    {
        $reply = $question->replies()->create($request->all());
        return response(['reply' => $reply]);
    }

    public function show(Question $question, Reply $reply)
    {
        return $reply;
    }

    public function edit(Reply $reply)
    {
        //
    }

    public function update(Request $request, Reply $reply)
    {
        //
    }

    public function destroy(Question $question, Reply $reply)
    {
        $reply->delete();
    }
}
