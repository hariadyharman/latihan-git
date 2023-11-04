@extends('layout.main')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-2">

            <h2>
                <a href="/blog/{{ $post->id }}"> {{ $post->title }}
                </a>
            </h2>
            {{-- h3 class="mb-4">{{ $post->author] }}</h3> --}}
            <p>{!! $post->body !!}</p>

        </article>
    @endforeach
@endsection
