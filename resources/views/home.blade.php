@extends('layouts/mainlayout')
@section('content')
<h1>Peduli Diri</h1>
<h6>Catatan Perjalanan</h6>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Selamat Datang di Aplikasi Peduli Diri</label>
  <div class="my-4 d-flex justify-content-between"> 
        <a href="logout" class="btn btn-danger">Logout</a>
    <a href="travel/create" class="btn btn-primary">Isi Catatan Perjalanan</a>
  </div>
</div>
@endsection