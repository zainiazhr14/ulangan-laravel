@extends('layouts.master')
@section('content')


  <div class="container">
      <a href="{{ route('barang.tambah') }}" class="waves-effect waves-light btn">Tambah Data Barang</a>
      @if (Session::has('pesan'))
          <p>{{ Session::get('pesan') }}</p>
      @endif
    <table>
        <thead>
          <tr>
              <th>#</th>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Satuan</th>
              <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($data_barang as $barang)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->jumlah }}</td>
                <td>{{ $barang->satuan }}</td>
                <td>
                    <form action="{{ route('barang.hapus', $barang->id) }}" method="get">
                    @csrf
                        <button type="submit" class="waves-effect waves-light btn" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                        <a href="{{ route('barang.edit', $barang->id) }}" class="waves-effect waves-light btn">Edit</a>
                    </form>
                </td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
      {{ $data_barang->links() }}
  </div>
        
@endsection