<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store (Blog $blog) {
        request()->validate([
            'body'=>'required | min:3'
        ]);

        
        $blog->comments()->create([
            'body'=>Request('body'),
            'user_id'=>auth()->id()
        ]);

        $subscribers = $blog->subscribers->filter(fn ($subscriber) => $subscriber->id !== auth()->id());
        
        $subscribers->each(function ($subscriber) use ($blog) {
            Mail::to($subscriber->email)->queue(new SubscribeMail($blog));
        });
        
        return redirect("Blogs/$blog->slug");
    }
}
