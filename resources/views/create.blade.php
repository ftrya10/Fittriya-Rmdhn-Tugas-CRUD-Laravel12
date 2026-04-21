<h2>Tambah Data Salon</h2>

<form action="/salon/store" method="POST">
    @csrf

    <input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan"><br><br>
    <input type="text" name="layanan" placeholder="Layanan"><br><br>
    <input type="number" name="harga" placeholder="Harga"><br><br>
    <input type="date" name="tanggal_booking"><br><br>

    <button type="submit">Simpan</button>
</form>