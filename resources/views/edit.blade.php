<h2>Edit Data Salon</h2>

<form action="/salon/{{ $salon->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama_pelanggan" value="{{ $salon->nama_pelanggan }}"><br><br>
    <input type="text" name="layanan" value="{{ $salon->layanan }}"><br><br>
    <input type="number" name="harga" value="{{ $salon->harga }}"><br><br>
    <input type="date" name="tanggal_booking" value="{{ $salon->tanggal_booking }}"><br><br>

    <button type="submit">Update</button>
</form>