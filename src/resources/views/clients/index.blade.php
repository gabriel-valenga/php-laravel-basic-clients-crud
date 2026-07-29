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
        <form action="{{ route('clients.index') }}" method="GET">
            <input
                type="text"
                name="search"
                placeholder="Search by name or email"
                value="{{ request('search') }}"
            >

            <button type="submit">Search</button>
        </form>

        <br>
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>
                            <a href="{{ route('clients.edit', $client) }}">Edit</a>
                            <form action="{{ route('clients.destroy', $client) }}"
                                method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        onclick="return confirm('Delete this client?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>