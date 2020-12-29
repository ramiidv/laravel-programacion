@extends('layouts.app')

@section('content')

    <h1>Inserte pelicula</h1>
    <form action="create" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo"/>

        <label for="anio">Anio</label>
        <input type="number" name="anio"/>

        <select name="director">
            <option disabled selected>Seleccione Director</option>
            <option value="direc">Director</option>
        </select>

        <select name="actor">
            <option disabled selected>Seleccione Actor</option>
            <option value="act">Actor</option>
        </select>

        <button>Agregar Actor</button>

        <select name="genero">
            <option disabled selected>Seleccione Genero</option>
            <option value="gene">Genero</option>
        </select>

        <label for="imagen">Portada</label>
        <input type="text" name="imagen"/>

        <button type="submit" name="button">Enviar</button>

    </form>


@endsection
