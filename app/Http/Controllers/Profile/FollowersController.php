<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}