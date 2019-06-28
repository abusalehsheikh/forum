<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReplyResource;
use App\Model\Question;
use App\Model\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{

    public function index(Question $question)
    {
        return ReplyResource::collection($question->replies);
//        return Reply::latest()->get();
    }

    public function create()
    {
        //
    }

    public function store(Question $question, Request $request)
    {
        $reply = $question->replies()->create($request->all());
        return response(['reply' => new ReplyResource($reply)]);
    }

    public function show(Question $question, Reply $reply)
    {
        return new ReplyResource($reply);
    }

    public function edit(Reply $reply)
    {
        //
    }

    public function update(Question $question, Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return response('Updated',201);
    }

    public function destroy(Question $question, Reply $reply)
    {
        $reply->delete();
    }
}
