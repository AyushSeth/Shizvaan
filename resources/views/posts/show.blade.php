@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row show_post">
        <div class="col-7">
            <img src="/storage/{{ $post->image }}" class="w-100 post_align">
        </div>
        <div class="col-5">
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
</div>
@endsection
