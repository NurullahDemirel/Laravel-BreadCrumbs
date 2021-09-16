<?php

namespace App\Http\Controllers;

use App\Models\Post\Post;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function user($id)
    {
        $user=User::where('id',$id)->with('posts')->first();
        return view('Breadcrumbs.user',compact('user'));
    }

    public function post($id)
    {
        $post=Post::find($id);
        return view('Breadcrumbs.post',compact('post'));

    }
}
