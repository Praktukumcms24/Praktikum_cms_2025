<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
</head>
<body>
    <h1>Edit Pelanggan</h1>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $pelanggan->nama }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $pelanggan->email }}" required>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $pelanggan->alamat }}" required>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('pelanggan.index') }}">Kembali</a>
</body>
</html>
