@extends('main')
@section('content')

<div class="layanan">
    <div class="titleWarp">
        <div class="layananTitle">Layanan</div>
        <a href="/layanan/edit" class="btn btn-primary btn-1" role="button">
            <ion-icon name="add-circle" class="icon-1"></ion-icon>
            Tambah Layanan
        </a>
    </div>
    <div class="catSort">
        <button type="button" class="btn btn-primary btn-2">
            <ion-icon name="library"></ion-icon>
            Category
        </button>
        <button type="button" class="btn btn-primary btn-2">
            <ion-icon name="funnel"></ion-icon>
            Sort by
        </button>
    </div>
    <div class="katalog">
        @if (isset($layanan) AND $layanan->count()>0)
        @foreach ($layanan as $item)
        <div>
            <h1>{{$item->nama_layanan}}</h1>
            <p>{{$item->harga}}</p>
            <p>{{$item->status}}</p>
            <p>{{$item->keterangan}}</p>
        </div>
        @endforeach
        @else
        <div class="picture">
            <img src="/img/ALT 4.png" alt="noservice">
        </div>
        <div class="message text-center">
            <h3 class="fw-bold">Belum ada layanan yang dibuat</h3>
            <p>Buat dan atur layanan yang bisa diakses pelangganmu!</p>
            <p>Klik button “Tambah Layanan” di atas kanan halaman ini</p>
        </div>
        @endif
    </div>
</div>


@endsection