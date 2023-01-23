@extends('layouts.mainlayout')

@section('title', '')
    @section('content')
    <h1>Peduli Diri</h1>
    <h6>Catatan Perjalanan</h6>

    <div class="my-4 d-flex justify-content-between">
      <a href="travel/create" class="btn btn-primary">Isi Catatan Perjalanan</a>
    </div>

    @if(Session::has('status'))
    <div class="alert alert-success" role="alert">
      {{Session::get('message')}}
    </div>
    @endif

    <div class="shadow-lg p-3 mb-5 bg-body rounded">
      <div class="p-6 text-black-500">
        @foreach ( $travel_logs as $data )
          <a href="{{ route('travel.show', $data->id)}}">
            <p>Tanggal : <?= $data->date ?></p>
            <p>Waktu : <?= $data->time ?></p>
          </a>
            <p><a href="travel/edit/{{$data->id}}" class="btn btn-warning">Edit</a></p>
            <form action="/travel/{{$data->id}}" method="post">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endforeach
    </div>
  </div>
@endsection