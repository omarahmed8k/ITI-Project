<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;


class StoreController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post;

        $post->caption = $request->input('caption');
        $post->user_id = auth()->user()->id;


        $str = $request->input('caption');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/post/', $filename);
            $post->image = $filename;


        }
        $post->save();


        preg_match_all('/#(\w+)/', $str, $matches);

        foreach ($matches[0] as $hashtag_name) {


            $tag = Tag::where('name', '=', $hashtag_name)->first();
            if ($tag === null) {
                $tag = new Tag;
                $tag->name = $hashtag_name;
                $tag->save();
                $post->tags()->attach($tag);
            } else {
                $post->tags()->attach($tag);
            }

        }
        return redirect()->route('home');
    }
}
