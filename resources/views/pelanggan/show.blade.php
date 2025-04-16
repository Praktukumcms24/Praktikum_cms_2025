<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Pelanggan</title>
</head>
<body>
    <h1>Detail Pelanggan</h1>

    <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
    <p><strong>Email:</strong> {{ $pelanggan->email }}</p>
    <p><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>

    <!-- Form untuk menghapus pelanggan -->
    <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus Pelanggan</button>
    </form>

    <br>

    <!-- Link kembali ke daftar pelanggan -->
    <a href="{{ url('/pelanggan') }}">Kembali ke Daftar Pelanggan</a>
</body>
</html>
