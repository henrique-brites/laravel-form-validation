<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de clientes</h1>
    <br><br>
    <table border="1">
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
                    {{--                        <a href="{{route('clients.edit',['client' => $client->id])}}">Editar</a> |--}}
                    {{--                        <a href="{{route('clients.show',['client' => $client->id])}}">Ver</a>--}}
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
</body>
</html>