<h2>Tambah Data Salon</h2>

<form action="/salon/store" method="POST">
    @csrf

    <input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan"><br><br>

    <select name="layanan">
        <option value="">-- Pilih Layanan --</option>
        <option value="Hair Spa">Hair Spa</option>
        <option value="Creambath">Creambath</option>
        <option value="Potong Rambut">Potong Rambut</option>
        <option value="Hair Coloring">Hair Coloring</option>
        <option value="Facial">Facial</option>
        <option value="Manicure">Manicure</option>
        <option value="Pedicure">Pedicure</option>
        <option value="Smoothening">Smoothening</option>
    </select><br><br>

    <label>Harga (Rp)</label><br>
    <input type="number" name="harga" placeholder="Contoh: 150000"><br><br>

    <input type="date" name="tanggal_booking"><br><br>

    <button type="submit">Simpan</button>
</form>