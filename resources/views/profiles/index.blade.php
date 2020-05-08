@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-19/s150x150/57348348_279964586285572_6163317076652982272_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_ohc=Sw597m3fxiQAX9a6sup&oh=6953db302404296d19db7db73137ae52&oe=5EDBC8E3" alt="no image detected" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between">
                <h1 class="h1">{{ $user->username }}</h1>
                <a href="/p/create ">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>1k</strong> followers</div>
                <div class="pr-5"><strong>3k</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100 h-100 pb-4"  src="/storage/{{ $post->image }}" style="object-fit: cover;">
                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection
