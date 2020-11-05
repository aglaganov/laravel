@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="/storage/{{ $post->user->profile->image }}" class="w-100 rounded-circle" style="max-width:40px;" alt="">
                    </div>
                   <div>
                       <div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></div>
                    </div>
                </div>
            </div>

            <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span> {{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection
