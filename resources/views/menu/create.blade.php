@extends('menu.layout')
@section('content')
<div class="card">
  <div class="card-header">Add Menu</div>
  <div class="card-body">
      
      <form action="{{ url('menu') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama Makanan</label></br>
        <input type="text" name="nama_makanan" id="nama_makanan" class="form-control"></br>
        <label>Harga</label></br>
        <input type="integer" name="harga" id="harga" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop