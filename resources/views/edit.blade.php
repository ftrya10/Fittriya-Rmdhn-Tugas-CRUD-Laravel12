<h2>Edit Salon</h2>

<form action="/salon/{{ $salon->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama_salon" value="{{ $salon->nama_salon }}"><br>
    <input type="text" name="alamat" value="{{ $salon->alamat }}"><br>
    <input type="text" name="telepon" value="{{ $salon->telepon }}"><br>
    <textarea name="deskripsi">{{ $salon->deskripsi }}</textarea><br>

    <button type="submit">Update</button>
</form>