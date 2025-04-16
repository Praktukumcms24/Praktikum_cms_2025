<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
</head>
<body>

    <h2>Edit Pelanggan</h2>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $pelanggan->nama }}" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $pelanggan->email }}" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" required>{{ $pelanggan->alamat }}</textarea><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('pelanggan.index') }}">Kembali</a>
    </form>

</body>
</html>
