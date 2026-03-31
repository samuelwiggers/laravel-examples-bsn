@extends('layouts.default')

@section('title', 'Documentos')

@section('content')

<h1>Lista de Documentos</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<a href="{{ route('documents.create') }}">Criar novo</a>

@if(!isset($documents) || $documents->isEmpty())
    <p>Nenhum documento encontrado.</p>
@else
    <ul>
        @foreach ($documents as $document)
            <li>
                <a href="{{ route('documents.show', $document) }}">{{ $document->type }} / {{ $document->number }}</a>
            </li>
        @endforeach
    </ul>
@endif

@endsection