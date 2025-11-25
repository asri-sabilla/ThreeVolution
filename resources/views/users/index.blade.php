<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>

<h2>Data Pendaftar</h2>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>Aksi</th>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->alamat }}</td>
        <td>{{ $user->no_telfon }}</td>
        <td>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>