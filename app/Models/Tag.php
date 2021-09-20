<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table ='tags';
    protected $fillable=[
        'name',
        'created_at',
        'updated_at'];
    public function post_tags()
    {
        return $this->hasMany(Post_tag::class);
    }
}
