@extends('layouts.app')

@section('content')
    <h1>Crear Post</h1>
    <form method="post" action="">
        @csrf
        @method('PUT')

        <label>titulo</label>
        <input type="text" value="{{ old('titulo', 'titulo actual') }}">
        <label>contenido</label>
        <input type="text">
        <input type="submit">
    </form>
@endsection

