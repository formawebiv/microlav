<!DOCTYPE html>
 <title>a blog</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">


    @foreach ($posts as $post)
        <article>
            <h1>
            <a href="/posts/{{ $post->slug }}"> 
            {{ $post->title }}</a>
        </h1>
            <p>{{ $post->date }}</p>
            <div>{{ $post->excerpt }}</div>
        </article>
        @endforeach

    </body>
