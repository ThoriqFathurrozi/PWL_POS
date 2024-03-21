<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>

<body>
    <h1>Form Tambah Data User</h1>
    <form action="/user/tambah_simpan" method="post">
        {{csrf_field()}}
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan Username">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan Password">
        <br>
        <label for="level_id">Level ID</label>
        <input type="number" name="level_id" id="level_id" placeholder="Masukkan ID Level">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>