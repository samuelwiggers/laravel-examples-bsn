@extends('layouts.default')

@section('title','Criar Documento')

@section('content')

<h1>Criar Documento</h1>

<form action="{{ route('documents.store') }}" method="post">
    @csrf
    <div>
        <label>Tipo</label>
        <input type="text" name="type" value="{{ old('type') }}">
        @error('type')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Número</label>
        <input type="text" name="number" value="{{ old('number') }}">
        @error('number')<div>{{ $message }}</div>@enderror
    </div>
    <button type="submit">Salvar</button>
</form>

@endsection
