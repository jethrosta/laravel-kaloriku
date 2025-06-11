@extends('layouts.app')

@section('content')

    <div class="container-xxl p-0" style="background-image: url(../assets/imgs/Exercise/dark-bg.jpg)">

        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Calories</h1>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{asset('assets/imgs/mantap.jpg')}}" alt="kalori" class="img-fluid"> {{-- Tambahkan img-fluid agar responsif --}}
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Calculate</h5>
                        <h1 class="text-white mb-4">Calculate your calories</h1>

                        <form id="calorie-calculator" action="{{ route('calorie.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" name="image" id="image" required>
                                        <label for="image">Upload Foto Makanan</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Proses Foto</button>
                                </div>

                                {{-- Menampilkan hasil deteksi DI SINI --}}
                                <div class="col-12 mt-4"> {{-- Tambahkan margin-top untuk jarak --}}
                                    @if(session('hasil'))
                                        <div class="bg-light p-3 rounded text-dark"> {{-- Ubah text-white menjadi text-dark karena bg-light --}}
                                            <h4>Hasil Deteksi:</h4>
                                            <p><strong>Nama Makanan:</strong> {{ session('hasil')['nama'] }}</p>
                                            <p><strong>Kalori:</strong> {{ session('hasil')['kalori'] }} kcal</p>
                                            <p><strong>Serving:</strong> {{ session('hasil')['serving'] }} gram</p>
                                        </div>
                                    @endif
                                </div>

                                {{-- Menampilkan pesan error DI SINI --}}
                                <div class="col-12 mt-3"> {{-- Tambahkan margin-top untuk jarak --}}
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>

                                {{-- <div id="results"></div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

@endsection