@extends('layouts.mainlayout')

@section('title', 'Travel Log edit')

@section('content')

<div class="mt-5 col-5 m-auto">
    <form action="{{route('travel.update', $travel_log->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="date">Tanggal</label>
            <input type="date" class="form-control" name="date" id="date" value="{{$travel_log->date}}" required>
        </div>
        <div class="mb-3">
            <label for="time">Waktu</label>
            <input type="time" class="form-control" name="time" id="time" value="{{$travel_log->time}}" required>
        </div>
        <div class="mb-3">
            <label for="location">Lokasi</label>
            <input type="text" class="form-control" name="location" id="location" value="{{$travel_log->location}}" required>
        </div>
        <div class="mb-3">
            <label for="temperature">Suhu</label>
            <input type="text" class="form-control" name="temperature" id="temperature" value="{{$travel_log->temperature}}" required>
        </div>
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
        
    </form>
</div>

@endsection