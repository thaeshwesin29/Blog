<?php

namespace App\Models;


use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'user_id', 'blog_id'];



    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    }

