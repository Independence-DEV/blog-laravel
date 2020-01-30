@extends('template')

@section('content')

    <div class="card-columns">
        @foreach($posts as $post)
            <div class="card">
                @if(file_exists(public_path('img/thumbnail/'.$post->thumbnail.'')))
                    <img class="card-img-top" src="{{asset('img/thumbnail/'.$post->thumbnail)}}" alt="Card image cap">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                </div>
                <a href="/post/{{$post->id}}" class="stretched-link"></a>
            </div>
        @endforeach
    </div>

@endsection
