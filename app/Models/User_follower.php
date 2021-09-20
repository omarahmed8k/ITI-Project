<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_follower extends Model
{
    use HasFactory;
    protected $table ='user_followers';
    protected $fillable=[
        'user_id',
        'follower_id',
        'created_at',
        'updated_at'];

}
