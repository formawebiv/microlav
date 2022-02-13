<x-layout>
<article>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->date }}</p>
            <div><!-- ?= $post->body; ? -->
        {!! $post->body !!}
        </div>

        <p class="mt-5"><a href="/">volver atras</a></p>

    </div>
</article>
</x-layout>