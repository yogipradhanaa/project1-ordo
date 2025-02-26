@extends('layouts.main')

@section('header')
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
@endsection

@section('content')
<div class="row"></div>
<div class="col">
  <div class="card">
    <div class="card-body">
     <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Description</th>
          <th>Kode</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Kategori</th>
        </tr>
      </thead>
      <thead>
        <tbody>
        @foreach ($products as $products)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $products->name }}</td>
          <td>{{ $products->description }}</td>
          <td>{{ $products->kode }}</td>
          <td>{{ $products->price }}</td>
          <td>{{ $products->stock }}</td>
          <td>{{ $products->category->name}}</td>
          </tr>
          @endforeach
        </tbody>
      </thead>
     </table> 
    </div>
  </div>
</div>
@endsection