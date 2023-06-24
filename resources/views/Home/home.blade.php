<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h3>Data User</h3>

    <a href="/Tambah">Tambah User</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>No_telp</th>
            <th>Role_user</th>
            <th></th>
        </tr>

        @foreach($user as $p)

        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->username }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->password}}</td>
            <td>{{ $p->no_telp}}</td>
            <td>{{ $p->role_user}}</td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>