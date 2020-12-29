@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    {{ $posts->titulo }}
    {{ $posts->imagen }}
    {{ $posts->anio }}
    {{ $posts->director }}
    {{ $posts->actor }}

        <form action="/posts/{{ $alumno->id }}" method="POST">
            @csrf
            @method('DELETE')
        <input type="submit" value="Eliminar post"/>
    </form>

    <a href="{{ route('create') }}"></a>
@endsection
