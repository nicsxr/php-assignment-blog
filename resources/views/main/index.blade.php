@extends('main')
@section('content')
    @foreach ($posts as $post)
        <div>
            <div>Author - {{ $post->user_name }}</div>
            <div>{{ $post->post_text }}</div>
            <div><a href={{ route('main.show',$post->id) }}>View</a></div>
            <br/>
        </div>
    @endforeach
@endsection
