@extends('layouts.app')

@section('content')
    <h1>Postardos</h1>
    @foreach ($posts as $post)
{{ $post->titulo }}
{{ $post->imagen}}
{{ $post->anio }}
{{ $post->director }}
{{ $post->actor }}

        <a href="{{ route('create', $post->id) }}"></a>
@endforeach

@endsection
