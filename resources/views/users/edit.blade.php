<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label><br>
    <input type="text" name="name" value="{{ $user->name }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ $user->email }}"><br><br>

     <label>Password:</label><br>
    <input type="text" name="password" value="{{ $user->password }}"><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat" value="{{ $user->alamat }}"><br><br>

    <label>No. Telepon:</label><br>
    <input type="text" name="no_telfon" value="{{ $user->no_telfon }}"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>