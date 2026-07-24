<h1>Edit Client</h1>

<form action="{{ route('clients.update', $client) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Name</label>
        <input
            type="text"
            name="name"
            value="{{ old('name', $client->name) }}"
        >
    </div>

    <div>
        <label>Email</label>
        <input
            type="email"
            name="email"
            value="{{ old('email', $client->email) }}"
        >
    </div>

    <div>
        <label>Phone</label>
        <input
            type="text"
            name="phone"
            value="{{ old('phone', $client->phone) }}"
        >
    </div>

    <button type="submit">Update Client</button>
</form>