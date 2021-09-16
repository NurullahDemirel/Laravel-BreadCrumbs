@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('user',$user)}}

                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">created_at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->posts as $post)
                                    <tr>
                                        <th scope="row">{{$post->id}}</th>
                                        <td><a href="{{route('post',$post->id)}}">{{$post->title}}</a></td>
                                        <td>{{$post->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
