<h2>Tambah Salon</h2>

<form action="/salon/store" method="POST">
    @csrf
    <input type="text" name="nama_salon" placeholder="Nama"><br>
    <input type="text" name="alamat" placeholder="Alamat"><br>
    <input type="text" name="telepon" placeholder="Telepon"><br>
    <textarea name="deskripsi"></textarea><br>
    <button type="submit">Simpan</button>
</form>