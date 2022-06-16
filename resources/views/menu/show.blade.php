@extends('menu.layout')
@section('content')
<div class="card">
  <div class="card-header">Detail Produk</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $menu->nama_makanan }}</h5>
        <p class="card-text">Harga : {{ $menu->harga }}</p>
  </div>
      
    </hr>
  
  </div>
</div>