<?php

use App\Models\Commnet\Comment;
use App\Models\Post\Post;
use App\Models\User;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});


Breadcrumbs::for('user', function ($trail,$user) {
    $trail->parent('home');
    $trail->push('User', route('user',$user->id));
});

// Home > user>post
Breadcrumbs::for('post', function ($trail,$post) {
    $trail->parent('user',$post->user);
    $trail->push('Post '.$post->title, route('post',$post->id));
});

