<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title></title>
        <!--<link rel="stylesheet" href="">-->
    </head>
    <body>
        <h1>Blog Name</h1>
        <a href='/posts/create'>投稿する</a>
        <div class="posts">
            @foreach ($posts as $post)
            <div class="post">
                <h2 class="title">
                    
                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h2>
                <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
                <p class="body">{{$post->body}}
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </p>
            @endforeach
            </div>
            
        </div>
        <div class='paginate'>
            {{$posts->links()}}
        </div>
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>

    </body>
</html>
