<x-layout>

@foreach ($posts as $post)
        <article class="container mx-auto py-6">
            <h1>
            <a href="/posts/{{ $post->slug }}">  <!-- ?= $post->slug; ? -->  
            <!-- ?= $post->title; ? -->{{ $post->title }}</a>
        </h1>
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <p><!-- ?= $post->date; ? --> {{ $post->date }}</p>
            <div><!-- ?= $post->excerpt; ? -->{{ $post->excerpt }}</div>
        </article>
    @endforeach
</x-layout>