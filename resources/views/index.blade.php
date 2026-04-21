<h2>Data Salon</h2>

<a href="">Tambah Data</a>

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
            <a href="">Edit</a>
            <a href="">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>