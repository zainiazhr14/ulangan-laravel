@extends('layouts.master')
@section('content')
<h3 style="text-align: center">Tambah Data Barang</h3>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('barang.store') }}" method="post">
    @csrf
    <div class="row container">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input type="text" id="nama" class="autocomplete" name="nama">
              <label for="nama">Nama Barang</label>
            </div>
    
            <div class="input-field col s6">
              <input type="text" id="jumlah" class="autocomplete" name="jumlah">
              <label for="jumlah">Jumlah Barang</label>
            </div>
          </div>
          <div class="input-field col s6">
            <input type="text" id="satuan" class="autocomplete" name="satuan">
            <label for="satuan">Satuan Barang</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
      </div>
      
</form>
@endsection