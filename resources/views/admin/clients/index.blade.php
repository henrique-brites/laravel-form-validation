@extends('layouts.layout')

@section('content')
    <h3>Listagem de clientes</h3>
    <a class="btn btn-default" href="{{ route('clients.create') }}">Criar novo</a>
    <br><br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CNPJ/CPF</th>
            <th>Data Nasc.</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @forelse($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->document_number }}</td>
                <td>{{ $client->date_birth }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->sex }}</td>
                <td>
                    <a href="{{route('clients.edit',['client' => $client->id])}}">Editar</a> |
                    <a href="{{route('clients.show',['client' => $client->id])}}">Ver</a>
                </td>
            </tr>
        @empty
            <tr style="text-align:center;">
                <td colspan='8'>
                    Nenhuma cliente encontrado!!
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection