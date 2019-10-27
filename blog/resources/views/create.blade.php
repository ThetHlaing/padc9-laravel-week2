<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post</title>

    </head>
    <body>
        <h1>Create new post</h1>
        <form action="/posts/store" method="POST">
            @csrf
            <label for="urlInput">Url  :</label> 
            <input id="urlInput" type="text" name="url"/><br/>
            <label>Content  : <textarea name="content"></textarea></label><br/>
            <button type="submit">Save</button>
        </form>     
    </body>
</html>
