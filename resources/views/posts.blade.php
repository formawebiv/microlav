<!DOCTYPE html>
 <title>a blog</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">



    <!-- ?php foreach ($posts as $post) : ? -->
    @foreach ($posts as $post)
        <article>
            <h1>
            <a href="/posts/{{ $post->slug }}">  <!-- ?= $post->slug; ? -->  
            <!-- ?= $post->title; ? -->{{ $post->title }}</a>
        </h1>
            <p><!-- ?= $post->date; ? --> {{ $post->date }}</p>
            <div><!-- ?= $post->excerpt; ? -->{{ $post->excerpt }}</div>
        </article>
        @endforeach
    <!-- ?php endforeach; ? -->

        <!-- article>
            <h1><a href="/posts/primeiro-post">meu 1º artigo</a></h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta eos, totam, modi cum vitae qui expedita consequatur laboriosam possimus magnam omnis fugiat, corporis reiciendis. Odio enim non dolores iusto fugit?</p>
        </article>

        <article>
            <h1><a href="/posts/segundo-post">meu 2º artigo</a></h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta eos, totam, modi cum vitae qui expedita consequatur laboriosam possimus magnam omnis fugiat, corporis reiciendis. Odio enim non dolores iusto fugit?</p>
        </article>

        <article>
            <h1><a href="/posts/terceiro-post">meu 3º artigo</a></h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta eos, totam, modi cum vitae qui expedita consequatur laboriosam possimus magnam omnis fugiat, corporis reiciendis. Odio enim non dolores iusto fugit?</p>
        </article -->
    
    </body>
