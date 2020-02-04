<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Create Post</h1>
    <form method="POST" action="posts">
        @csrf
        <input type="text" id="title" name="title" placeholder="Title">
        <br><br>
        <textarea name="body" id="body" cols="30" rows="10">Write Something!</textarea>
        <br><br>
        <input type="checkbox" id="published" name="published" value="1">
        <br><br>
        <button type="submit">Add Post</button>
    </form>
</body>
</html>