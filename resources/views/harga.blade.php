@extends('layouts.app')

@section('content')
    <!-- START Alert -->
    <div class="alert">
        Lanjutkan pembayaran untuk menyelesaikan akun anda
    </div>
    <!-- END Alert -->


    <!-- START Card -->
    <div class="box-card">
        @foreach ($paket as $p)
            <div class="card">
                <div class="top">
                    <h1 class="poppins-semibold">{{ $p->nama }}</h1>
                    <span class="poppins-extralight">Rp.{{ number_format($p->harga, 0, 0, '.') }};</span>
                    <span class="bulan poppins-extralight">/bulan</span>
                </div>
                <div class="bottom">
                    @php
                        $fasilitas = json_decode($p->fasilitas);
                    @endphp
                    <ul>
                        @foreach ($fasilitas as $f)
                            <li>{{ $f }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route('detail', ['paket' => $p->id]) }}">
                        <span class="poppins-semibold">Pilih Paket</span>
                    </a>
                </div>
                <div class="circle-left"></div>
                <div class="circle-right"></div>
            </div>
        @endforeach
    </div>
    <!-- END Card -->
@endsection
@section('more-script')
    <script src="/js/hover-card.js"></script>
@endsection
