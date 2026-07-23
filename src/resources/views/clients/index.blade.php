<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clients</title>
</head>
<body>
    <h1>Clients List</h1>
    <p>
        <a href="{{ route('clients.create') }}">New Client</a>
    </p>
    @if($clients->isEmpty())
        <p>Clients list is empty.</p>
    @else
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>

            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>