<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        {{$post->title}}
    </p>

    <p>

        {{$post->body}}
    </p>
    @if(count($post->comments))
    @foreach($post->comments as $comment)

    <ul>
        <li>{{$comment->author}}</li>
        <li>{{$comment->body}}</li>
    </ul>
    @endforeach
    @endif

    <h4>Post a comment</h4>
    <form method="POST" action="/posts/{{$post->id}}/comments" >
        @csrf
        <div class="form-group">
            <label for="author">Your name:</label>
            <input type="text" class="form-control" id="author" name="author"/>
        </div>
        <div class="form-group">
            <label for="text">Comment:</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>