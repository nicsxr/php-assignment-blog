<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["comment_text", "user_name","post_id"];

    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
