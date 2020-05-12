@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row show_post">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100 post_align">
                </a>
            </div>
        </div>
        <div class="row pb-4 pt-2">
            <div class="col-6 offset-3">
                <div>
                    <div class="d-flex allign-items-center">
                        <div class="pr-3 pt-2">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100 profile_pic">
                        </div>
                        <div>
                            <div class="font-weight-bold pt-3">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }} </span>
                        </a>
                    </span>{{ $post->caption }}
                </div>
            </div>
        </div>
    @endforeach  

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
