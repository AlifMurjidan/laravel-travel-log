@extends('layouts.mainlayout')

@section('title', 'Add New Travel Log')

@section('content')
    <div class="mt-5 col-5 m-auto">

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <form action="/travel" method="post">
            @csrf
            <div class="mb-3">
                <label for="date">Tanggal</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
            <div class="mb-3">
                <label for="time">Waktu</label>
                <input type="time" class="form-control" name="time" id="time">
            </div>
            <div class="mb-3">
                <label for="location">Lokasi</label>
                <input type="text" class="form-control" name="location" id="location">
            </div>
            <div class="mb-3">
                <label for="temperature">Suhu</label>
                <input type="text" class="form-control" name="temperature" id="temperature">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
            
        </form>
    </div>

@endsection