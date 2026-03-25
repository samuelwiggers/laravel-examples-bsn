@extends('documents.index')

@section('title', 'Documentos')

@section('content')

<h1>Lista de Documentos</h1>

@foreach ($documents as $document)
    <div>
        <span>{{$document->type}} / {{$document->number}}</span>
    </div>
@endforeach

@endsection