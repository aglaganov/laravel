@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img src="https://scontent-lga3-2.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-lga3-2.cdninstagram.com&_nc_ohc=jtfqS8Lrv4AAX-SApVN&oh=319045d1879ec32615c9bf34b7dc804d&oe=5FCD4767" class="rounded-circle" alt=""></div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div><strong>339</strong> публикаций</div>
                <div><strong>59,1тыс.</strong> подписчиков</div>
                <div><strong>287</strong> подписок</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>

        </div>
    </div>
    <div class="row">
        <div class="col-4"><img src="https://scontent-lga3-2.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-lga3-2.cdninstagram.com&_nc_ohc=jtfqS8Lrv4AAX-SApVN&oh=319045d1879ec32615c9bf34b7dc804d&oe=5FCD4767" alt=""></div>
    </div>
</div>
@endsection
