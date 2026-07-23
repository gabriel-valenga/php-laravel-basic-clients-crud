<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Client</title>
</head>
<body>

    <h1>New Client</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div>
            <label>Name</label><br>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
            >
        </div>

        <br>

        <div>
            <label>Email</label><br>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
            >
        </div>

        <br>

        <div>
            <label>Phone</label><br>
            <input
                type="text"
                name="phone"
                value="{{ old('phone') }}"
            >
        </div>

        <br>

        <button type="submit">
            Submit
        </button>

    </form>

</body>
</html>