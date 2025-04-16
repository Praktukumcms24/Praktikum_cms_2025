<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
</head>
<body>
    <h1>Daftar Pelanggan</h1>
    <a href="{{ route('pelanggan.create') }}">Tambah Pelanggan</a>

    <!-- Search Form -->
    <form action="{{ route('pelanggan.index') }}" method="GET">
        <input type="text" name="search" value="{{ request()->get('search') }}" placeholder="Search...">
        <button type="submit">Search</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->email }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>
                        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}">Edit</a>
                        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div>
        {{ $pelanggans->appends(['search' => request()->get('search')])->links() }}
    </div>

</body>
</html>
