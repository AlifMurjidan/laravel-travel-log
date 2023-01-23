@extends('layouts.mainlayout')

@section('title', 'Travel Logs data')
    @section('content')
    <h1>Peduli Diri</h1>
    <h6>Catatan Perjalanan</h6>

    <form action="" method="get">
      <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <div class="p-6 text-gray-900">
            <p>Tanggal : <?= $travel_log->date ?></p>
            <p>Waktu : <?= $travel_log->time ?></p>
            <p>Lokasi : <?= $travel_log->location ?></p>
            <p>Suhu Tubuh : <?= $travel_log->temperature ?></p>
            <br>
        </div>
    </div>
</div>
    </form>
</div>
@endsection