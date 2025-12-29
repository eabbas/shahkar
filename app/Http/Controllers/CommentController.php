<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\comment;
use App\Models\User;
use App\Models\logo;
use App\Models\product;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return to_route('user_login');
        }
        comment::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'comment' => $request->comment
        ]);
        $product = product::find($request->product_id);
        return to_route('product-show', ['product' => $product]);
    }
    public function index()
    {
        $comments = comment::all();
        $logo = logo::first();
        return view('admin.comment.index', [
            'comments' => $comments,
            'logo' => $logo
        ]);
    }
    public function show(comment $comment)
    {
        return view('admin.comment.show', ['comment' => $comment]);
    }
    public function edit(comment $comment)
    {
        $products = product::select('id', 'title')->get();
        $users = User::select('id', 'name', 'family')->get();
        $comments = comment::all();
        return view('admin.comment.edit', ['comments' => $comments, 'comment' => $comment, 'products' => $products, 'users' => $users]);
    }
    public function update(Request $request)
    {
        $comment = comment::find($request->comment_id);
        $comment->comment = $request->comment;
        $comment->product_id = $request->product_id;
        $comment->user_id = $request->user_id;
        $comment->parent_id = $request->parent_id;
        $comment->save();
        return to_route('comment.index');
    }
    public function delete(comment $comment)
    {
        $comment->delete();
        return to_route('comment.index');
    }
}
