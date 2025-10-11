<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\comment;
use App\Models\product;

class CommentController extends Controller
{
    public function store(Request $request){
        comment::create([
            'user_id'=>Auth::id(),
            'product_id'=>$request->product_id,
            'comment'=>$request->comment
        ]);
        return to_route('home');
    }

    public function update(Request $request){
        $comment = product::find($request->id);
        $comment->comment = $request->comment;
        return to_route('home');
    }

    public function delete(comment $comment){
        dd($comment);
    }
}
