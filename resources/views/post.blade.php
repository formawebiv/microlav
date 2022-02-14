<x-layout>
<article class="container mx-auto py-6">    
            <!-- p>{!! $post->date !!}</p -->
            <h1>{!! $post->title !!}</h1>
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <div><!-- ?= $post->body; ? -->
        {!! $post->body !!}
        </div>

        <p class="mt-5"><a href="/">volver atras</a></p>
</article>
</x-layout>