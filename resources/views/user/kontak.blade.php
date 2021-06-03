@extends('user.app')
@section('content')

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Profil</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">

                            <img src="{{ asset('estore') }}/img/jagung.png" style="width: 350px" alt="Logo">


                        </div>
                        <div class="col-md-8">
                            <div class="container" data-aos="fade-up">

                                <header class="section-header">

                                    <h3>Selamat Datang di Anang Tani, Toko Pertanian Online</h3>

                                </header>

                                <div class="row gy-4">


                                      <div class="team-inner">
                                        <Strong style="text-align: center"></Strong>
                                        <p>Anang Tani merupakan toko online yang menyediakan produk-produk yang dibutuhkan untuk pertanian, perikanan, perkebunan, dan peternakan. Kami menjual berbagai macam obat-obatan dan alat pertanian, seperti Bibit / Benih, Nutrisi Tanaman, Pakan Ternak, Pestisida (Fungisida, Insektisida, Herbisida, Akarisida, dll), aneka pupuk (pupuk daun, pupuk akar, pupuk ZA, pupuk NPK Yaramila, NPK Mutiara, dll), dan juga alat-alat pertanian dengan kualitas terjamin dan harga terjangkau. <br>
                                            Bukan hanya menjual obat dan alat pertanian terlengkap, Saat ini kami juga telah bekerjasama dengan pabrik dan produsen produk pertanian seperti PT. Yara Indonesia, PT. Meroke Tetap Jaya, PT Petrokimia Gresik, Syngenta, PT. Bisi International Tbk, PT Multi Sarana Indotani, Dupont, Bayer, Nufarm, PT BASF Indonesia,FMC, dll. Sehingga tidak hanya produk kami yang lengkap tapi kami bisa memberikan harga murah <br>
                                            </p>
                                      </div>
                                </div>

                              </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
