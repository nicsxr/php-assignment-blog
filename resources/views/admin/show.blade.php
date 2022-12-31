@extends('main')
@section('content')
        <div>post id {{ $post->id }}</div>
            <div>post author{{ $post->user_name }}</div>
            <div>post text{{ $post->post_text }}</div>
        </div>
    <hr/>
    <h3>Comments</h3>
    @foreach ($comments as $comment)
        <div>
            <div>comment id {{ $comment->id }}</div>
            <div>comment author {{ $comment->user_name }}</div>
            <div>comment text{{ $comment->comment_text }}</div>
            <form action="{{ route('admin.destroyComment', $comment->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete" name="subimit" id="">
            </form>
        </div>
    @endforeach
@endsection
