@extends('layouts.default')

@section('title', 'Documento')

@section('content')

<h1>Documento</h1>

<div>
    <p>Tipo: {{ $document->type }}</p>
    <p>Número: {{ $document->number }}</p>
</div>

<a href="{{ route('documents.edit', $document) }}">Editar</a>

<form action="{{ route('documents.destroy', $document) }}" method="post" onsubmit="return confirm('Excluir?')">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>

@endsection
