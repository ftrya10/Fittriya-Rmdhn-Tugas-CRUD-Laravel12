<h2>Data Salon</h2>

<a href="/salon/create">Tambah Data</a>

<table border="1">
    <tr>
        <th>Nama Pelanggan</th>
        <th>Layanan</th>
        <th>Harga</th>
        <th>Tanggal Booking</th>
        <th>Aksi</th>
    </tr>

    @foreach($salon as $item)
    <tr>
        <td>{{ $item->nama_pelanggan }}</td>
        <td>{{ $item->layanan }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->tanggal_booking }}</td>
        <td>
            <a href="/salon/edit/{{ $item->id }}">Edit</a>

            <form action="/salon/{{ $item->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>