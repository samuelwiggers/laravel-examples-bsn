@extends('layouts.default')

@section('title','Usuários')

@section('content')

<h1>Lista de Usuários</h1>
@php
    $variavel = 1;
@endphp
@foreach ($users as $user)
    <div>{{ $user->name  }}</div>
@endforeach

@endsection