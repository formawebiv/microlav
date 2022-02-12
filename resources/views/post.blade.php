<!DOCTYPE html>
<title>meu blog</title>
    
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <body class="antialiased">
    <div class="container mx-auto">
        <article>
            <h1><?= $post->title; ?></h1>
            <p><?= $post->date; ?></p>
            <div><!-- ?= $post->body; ? -->
        {!! $post->body !!}
        </div>

        <p class="mt-5"><a href="/">volver atras</a></p>

    </div>
    </body>
</html>
