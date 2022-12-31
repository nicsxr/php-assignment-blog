@extends('main')
@section('content')
    @foreach ($posts as $post)
        <div>
            <div>{{ $post->id }}</div>
            <div>{{ $post->user_name }}</div>
            <div>{{ $post->post_text }}</div>
            <div><a href={{ route('admin.show', ['subdomain'=>'admin', 'id' => $post->id]) }}>View</a></div>
            <form action="{{ route('admin.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete" name="subimit" id="">
            </form>
            <hr/>
        </div>
    @endforeach
@endsection
