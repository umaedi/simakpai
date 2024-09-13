@extends('layouts.app')
@section('content')
<body class="bg-light">
  <main role="main" class="container">
     <img lazy="loading" src="{{ asset('img') }}/hero/banner.jpeg" loading="lazy" class="img-fluid" alt="Responsive image">
    <div class="d-flex align-items-center p-3 mt-3 text-white-50 bg-primary rounded box-shadow">
       <div class="lh-100">
         <h5 class="mb-0 text-white lh-100">Pendaftaran media</h5>
       </div>
     </div>
     <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
              <div class="my-3 p-3 bg-white rounded box-shadow">
                  <img lazy="loading" class="card-img-top" src="{{ asset('img/icon/media-online.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Media Online</h5>
                    <p class="card-text">Formulir pendaftaran media online</p>
                    <a href="{{ route('media-online-create') }}" class="btn btn-primary">Daftar</a>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="my-3 p-3 bg-white rounded box-shadow">
                  <img lazy="loading" class="card-img-top" src="{{ asset('img/icon/live-streaming.png') }}" alt="img">
                  <div class="card-body">
                    <h5 class="card-title">Media Streaming</h5>
                    <p class="card-text">Formulir pendaftaran media online</p>
                    <a href="#" class="btn btn-primary">Daftar</a>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="my-3 p-3 bg-white rounded box-shadow">
                  <img class="card-img-top" src="{{ asset('img/icon/media-cetak.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Media Cetak</h5>
                    <p class="card-text">Formulir pendaftaran media cetak</p>
                    <a href="#" class="btn btn-primary">Daftar</a>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="my-3 p-3 bg-white rounded box-shadow">
                  <img class="card-img-top" src="{{ asset('img/icon/media-elektronik.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Media Elektronik (TV)</h5>
                    <p class="card-text">Formulir pendaftaran media elektronik</p>
                    <a href="#" class="btn btn-primary">Daftar</a>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="my-3 p-3 bg-white rounded box-shadow">
          <h6>Alur Pendaftaran</h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">1. Media melakukan pembuatan akun</li>
            <li class="list-group-item">2. Memilih jenis media</li>
            <li class="list-group-item">3. Mengisi formulir pendaftaran</li>
            <li class="list-group-item">4. Berkas di verifikasi oleh Admin</li>
            <li class="list-group-item">5. Admin mengirim email pemberitahuan diterima atau ditolak memlaui email yang terdaftar</li>
          </ul>
          <button class="btn btn-primary btn-block">Buat akun</button>
        </div>
      </div>
    </div>
     <footer class="my-5 text-muted text-center text-small">
      <p class="mb-1">Copyright © 2023 Dinas Komunikasi dan Informatika Tulang Bawang. Developed By <a href="https://api.whatsapp.com/send?phone={{ env('NO_DEV') }}">IT DISKOMINFO</a></p>
    </footer>
   </div>
   </main>
   @stack('js')
 </body> 
@endsection