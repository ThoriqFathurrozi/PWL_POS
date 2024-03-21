<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah User</title>
</head>

<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>
    <form action="/user/ubah_simpan/{{$data->user_id}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{$data->username}}" placeholder="Masukkan Username">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{$data->nama}}" placeholder="Masukkan Nama">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{$data->password}}" placeholder="Masukkan Password">
        <br>
        <label for="level_id">Level ID</label>
        <input type="number" name="level_id" id="level_id" value="{{$data->level_id}}" placeholder="Masukkan ID Level">
        <br>
        <input type="submit" value="Ubah">
    </form>
</body>

</html>