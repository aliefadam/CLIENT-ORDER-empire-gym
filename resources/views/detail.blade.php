@extends('layouts.app')
@section('content')
    <!-- START Header -->
    <header>
        <h1 class="poppins-semibold">Kamu Memilih</h1>
        <div class="header-item">
            <div class="top">
                <span>{{ $paket->nama }}</span>
                <span class="poppins-extralight">Rp.{{ number_format($paket->harga, 0, 0, '.') }};</span>
                <span class="poppins-extralight">/bulan</span>
            </div>
            <div class="bottom">Baca Selengkapnya</div>
        </div>
    </header>
    <!-- END Header -->

    @if ($paket->nama == 'Mahasiswa')
        <!-- START Input File -->
        <div class="input-file">
            <div class="left">
                <div class="input-box">
                    <input type="file" id="input-file" />
                    <span>Pilih atau tarik file</span>
                </div>
                <button id="btn-upload">Upload</button>
            </div>
            <div class="right">
                <p>
                    Sebelum melakukan pembayaran <br />
                    Anda perlu melampirkan foto atau dokumen <br />
                    KTM (Kartu tanda mahasiswa) <br />
                    Terlebih dahulu, yang akan dicek saat jam operasi oleh staff <br />
                    (06.00 am - 21.00 pm WIB) <br />
                    Jangan tutup halaman ini, hingga status terkonfirmasi
                </p>
            </div>
        </div>
        <!-- END Input File -->
    @endif

    <!-- START Metopem -->
    <div class="metopem">
        <h1 class="poppins-regular">Sekali Bayar</h1>
        <div class="metopem-list">
            <div class="metopem-item">
                <div class="left">
                    <input checked type="radio" name="metopem" id="Pulsa" />
                </div>
                <div class="right">
                    <label for="Pulsa" class="poppins-medium">Bayar Dengan Pulsa</label>
                    <img src="/imgs/pulsa.png" alt="" />
                </div>
            </div>
            <div class="metopem-item">
                <div class="left">
                    <input type="radio" name="metopem" id="Kartu Kredit atau Debit" />
                </div>
                <div class="right">
                    <label for="Kartu Kredit atau Debit" class="poppins-medium">Kartu Kredit Atau Debit</label>
                    <img src="/imgs/kredit.png" alt="" />
                </div>
            </div>
            <div class="metopem-item">
                <div class="left">
                    <input type="radio" name="metopem" id="Paypal" />
                </div>
                <div class="right">
                    <label for="Paypal" class="poppins-medium">Paypal</label>
                    <img src="/imgs/paypal.png" alt="" />
                </div>
            </div>
            <div class="metopem-item">
                <div class="left">
                    <input type="radio" name="metopem" id="Dana" />
                </div>
                <div class="right">
                    <label for="Dana" class="poppins-medium">Dana</label>
                    <img src="/imgs/dana.png" alt="" />
                </div>
            </div>
            <div class="metopem-item">
                <div class="left">
                    <input type="radio" name="metopem" id="Gopay" />
                </div>
                <div class="right">
                    <label for="Gopay" class="poppins-medium">Gopay</label>
                    <img src="/imgs/gopay.png" alt="" />
                </div>
            </div>
            <div class="metopem-item">
                <div class="left">
                    <input type="radio" name="metopem" id="ShopeePay" />
                </div>
                <div class="right">
                    <label for="ShopeePay" class="poppins-medium">ShopeePay</label>
                    <img src="/imgs/shopee.png" alt="" />
                </div>
            </div>
        </div>
        <div class="box-info">
            <img src="/imgs/pulsa.png" alt="" id="img-selected" />
            <span class="poppins-medium">Kamu akan diarahkan ke <span id="metopem-name">Pulsa</span> untuk
                menyelesaikan pembelian</span>
            <a href="{{ route('pembayaran-berhasil') }}" class="poppins-semibold">Lanjutkan Pembelian</a>
        </div>
    </div>
    <!-- END Metopem -->
@endsection
@section('more-script')
    <script src="/js/input-file.js"></script>
    <script>
        $(".metopem-item input").on("change", function() {
            $("#img-selected").css("transform", "translateX(0)");

            const imgSrc = $(this).parents().next().children("img").first().attr("src");
            const paymentName = $(this).attr("id");

            if (
                imgSrc.includes("paypal") ||
                imgSrc.includes("dana") ||
                imgSrc.includes("gopay")
            ) {
                console.log("geser");
                $("#img-selected").css("transform", "translateX(100px)");
            } else if (imgSrc.includes("shopee")) {
                console.log("gausah");
                $("#img-selected").css("transform", "translateX(120px)");
            }

            $("#img-selected").attr("src", imgSrc);
            $("#metopem-name").html(paymentName);
        });
    </script>
@endsection
