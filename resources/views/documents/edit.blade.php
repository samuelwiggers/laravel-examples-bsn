@extends('layouts.default')

@section('title','Editar Documento')

@section('content')

<h1>Editar Documento</h1>

<form action="{{ route('documents.update', $document) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label>Tipo</label>
        <input type="text" name="type" value="{{ old('type',$document->type) }}">
        @error('type')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Número</label>
        <input type="text" name="number" value="{{ old('number',$document->number) }}">
        @error('number')<div>{{ $message }}</div>@enderror
    </div>
    <button type="submit">Salvar</button>
</form>

@endsection
