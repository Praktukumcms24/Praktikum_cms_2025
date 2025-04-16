<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h1>Tambah Pelanggan</h1>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('pelanggan.index') }}">Kembali</a>
</body>
</html>
