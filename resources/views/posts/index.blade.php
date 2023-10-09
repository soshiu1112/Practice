<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title></title>
        <!--<link rel="stylesheet" href="">-->
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="posts">
            @foreach ($posts as $post)
            <div class="post">
                <h2 class="title">{{$post->title}}</h2>
                <p class="body">{{$post->body}}</p>
            @endforeach
            </div>
            
        </div>
        <div class='paginate'>
            {{$posts->links()}}
        </div>
    </body>
</html>
