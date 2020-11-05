@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img src="https://scontent-lga3-2.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-lga3-2.cdninstagram.com&_nc_ohc=jtfqS8Lrv4AAX-SApVN&oh=319045d1879ec32615c9bf34b7dc804d&oe=5FCD4767" class="rounded-circle" alt=""></div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div><h1>{{ $user->username }}</h1></div>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div><strong>339</strong> публикаций</div>
                <div><strong>59,1тыс.</strong> подписчиков</div>
                <div><strong>287</strong> подписок</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>

        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4">
            <img src="/storage/{{ $post->image }}" alt="">
        </div>
        @endforeach
    </div>
</div>
@endsection
