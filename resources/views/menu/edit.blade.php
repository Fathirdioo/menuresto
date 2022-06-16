@extends('menu.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit</div>
  <div class="card-body">
      
      <form action="{{ url('menu/' .$menu->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$menu->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama_makanan" id="nama_makanan" value="{{$menu->nama_makanan}}" class="form-control"></br>
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" value="{{$menu->harga}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop