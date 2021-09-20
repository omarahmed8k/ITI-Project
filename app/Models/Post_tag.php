<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
    use HasFactory;
    protected $table ='post_tags';
    protected $fillable=[
        'tag_id',
        'post_id',
        'created_at',
        'updated_at'];
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }
}
