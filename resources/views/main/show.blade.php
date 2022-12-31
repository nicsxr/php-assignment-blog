@extends('main')
@section('content')
            <p id="post_id">{{ $post->id }}</p>
            <div>post author{{ $post->user_name }}</div>
            <div>post text{{ $post->post_text }}</div>
        </div>
    <hr/>
    <h3>Comments</h3>
    @foreach ($comments as $comment)
        <div>
            <div>comment author {{ $comment->user_name }}</div>
            <div>comment text{{ $comment->comment_text }}</div>
        </div>
    @endforeach
    Name
    <input type="text" id="name">
    Comment
    <input type="text" id="comment">
    <input type="button" name="" id="btnajax" class="btn btn-primary" role="button" onclick="addComment()" value="Comment">

    <script>
        async function addComment() {
            try {

                const response = await axios.post('/comment', {
                    user_name: document.getElementById('name').value,
                    comment_text: document.getElementById('comment').value,
                    post_id: document.getElementById('post_id').innerHTML,
                });
                console.log(response);
            } catch (error) {
                console.error(error);
            }
        }


    </script>
@endsection
