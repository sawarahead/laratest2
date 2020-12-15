<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts --> 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
         <form action='posts/search' method='post'>
             {{ csrf_field()  }}
             <input type='search' name='searchtext' size=50 maxlength=200 placeholder='検索したい内容を入力して下さい。'>
             <input type='submit' value='検索'>
         </form>
         <a href='/posts/create'>create</a>
         <div class='results'>
            @if (isset($results))
                {{ session('results') }}
            @else
                <div class='posts'>
                    @foreach ($posts as $post)
                        <div class='post'>
                            <a href='posts/{{ $post->id}}'><h2 class='title'>{{ $post->title }}</h2></a>
                            <p class='body'>{{ $post->body }}</p>
                        </div>
                    @endforeach 
                </div>
                <div class='paginete'>
                    {{ $posts->links() }}
                </div>
            @endif
         </div>
         
    </body>
</html>
