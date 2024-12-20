<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index() {

        return view('blogs.index', [
            'blogs' =>Blog::latest()
            ->filter(request(['search', 'category','username']))
            ->paginate(6)
            ->withQueryString()

        ]);
}

public  function show(Blog $blog) {
    $blog->load('comments.author');
        return view('blogs.show',
        [
            'blog' =>$blog,
           'randomBlogs' =>Blog::inRandomOrder()->take(3)->get()

        ]);
}


public function subscriptionHandler(Blog $blog)
{
  //if auth user subscribed to blog
    if(User::find(auth()->id())->isSubscribed($blog)){
        $blog->unSubscribe();
    }else{
        $blog->subscribe();
    }
}



}


