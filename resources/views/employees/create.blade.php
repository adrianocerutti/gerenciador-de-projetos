@extends('app')

@section('titulo', 'Novo Funcionários')

@section('conteudo')
    <h1>Novo Funcionário</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @include('employees._form')
    </form>
@endsection
