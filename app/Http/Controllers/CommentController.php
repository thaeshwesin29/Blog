<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'body' => 'required|min:10'
        ]);

        // Correctly call create on the relationship, not the collection
        $blog->comments()->create([  // use comments() here
            'body' => request('body'),
            'user_id' => auth()->user()->id
        ]);
        $subscribers=$blog->subscribers->filter(fn($subscriber) => $subscriber->id != auth()->id());
          $subscribers->each(function($subscriber) use ($blog)
          {
            Mail::to($subscriber->email)->send(new SubscriberMail($blog));
          });
        return redirect('/blogs/'.$blog->slug);
    }

}
