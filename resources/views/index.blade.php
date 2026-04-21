<h2>Data Salon</h2>

<a href="/salon/create">Tambah</a>

<table border="1">
<tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Aksi</th>
</tr>

@foreach($salons as $s)
<tr>
    <td>{{ $s->nama_salon }}</td>
    <td>{{ $s->alamat }}</td>
    <td>{{ $s->telepon }}</td>
    <td>
        <a href="/salon/edit/{{ $s->id }}">Edit</a>
        <form action="/salon/{{ $s->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>