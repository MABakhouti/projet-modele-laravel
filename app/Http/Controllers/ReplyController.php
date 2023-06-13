<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\Comment;

class ReplyController extends Controller
{
    //
    public function addReply(Request $request, $repId){
        $comment = Comment::findOrFail($repId);
        $reply = new Reply();
        $reply->visitor_name = $request->visitor_name;
        $reply->visitor_email = $request->visitor_email;
        $reply->visitor_website = $request->visitor_website;
        $reply->comment_id = $request->comment_id;
        $reply->body = $request->body;
        $reply->save();

        return back()->with(['message'=>'Comment Added Successfully!']);
    }
}
