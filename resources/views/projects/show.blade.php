@extends('app')

@section('titulo', 'Detalhes do Projeto')

@section('conteudo')
    <div class="card my-3">
        <h5 class="card-header">Detalhes do Projeto {{ $project->nome }}</h5>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $project->id }}</p>
            <p><strong>Nome: </strong> {{ $project->nome }}</p>
            <p><strong>Cliente: </strong> {{ $project->client->nome }}</p>
        </div>
    </div>
    <br>
    <div class="card">
        <h5 class="card-header">Funcionários que trabalham no projeto {{ $project->nome }}</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        {{-- <th scope="col">Ações</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($project->employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->nome }}</td>
                            {{-- <td>
                                <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">Atualizar</a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                                </form>
                            </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <th>Nenhum funcionário alocado no projeto</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <br>
    <a class="btn btn-success" href="{{ route('projects.index') }}">Voltar para lista</a>
@endsection
