@extends('layouts.app')
@section('content')
<main role="main" class="container">
  <img lazy="loading" src="{{ asset('img') }}/hero/banner.jpeg" loading="lazy" class="img-fluid" alt="Responsive image">
 <div class="d-flex align-items-center p-3 mt-3 text-white-50 bg-primary rounded box-shadow">
    <div class="lh-100">
      <h5 class="mb-0 text-white lh-100">{{ $title ?? 'SIMAKPAI' }}</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-3">Silakan lengkapi data dibawah ini</h6>
        <form action="/register" method="POST" enctype="multipart/form-data">
          @csrf
             <div class="form-group my-3">
               <label for="nip">Konfirmasi Status Wajib Pajak (KSWP)</label>
               <input type="file" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}">
               @error('nip')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="pangkat">PIMRED UKW UTAMA</label>
               <input type="file" class="form-control @error('pangkat') is-invalid @enderror" id="pangkat" name="pangkat" value="{{ old('pangkat') }}">
               @error('pangkat')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="jabatan">VERIFIKASI DEWAN PERS</label>
               <input type="file" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
               @error('jabatan')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="instansi">SEBARAN</label>
               <input type="file" class="form-control @error('instansi') is-invalid @enderror" id="instansi" name="instansi" value="{{ old('instansi') }}">
               @error('instansi')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="no_tlp">RANGKING</label>
               <input type="file" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}">
               @error('no_tlp')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="domisili">TOTAL PENGUNJUNG</label>
               <input type="file" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}">
               @error('domisili')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="email">PROFIL PERUSAHAAN</label>
               <input type="file" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
               @error('email')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="password">KANTOR PUSAT BERADA DI TULANG BAWANG</label>
               <input type="file" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
               @error('password')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="password">BENEFIT TAMBAHAN</label>
               <input type="file" class="form-control @error('password_confirmation') is-invalid @enderror" id="password" name="password_confirmation">
               @error('password_confirmation')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <div class="form-group mb-3">
               <label for="password"> INVOICE PEMBAYARAN DOMAIN</label>
               <input type="file" class="form-control @error('password_confirmation') is-invalid @enderror" id="password" name="password_confirmation">
               @error('password_confirmation')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>
             <button id="btn_submit" type="submit" class="btn btn-primary mb-3">DAFTAR</button>
          </div>
       </form>
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
        </div>
      </div>
    </div>
</div>
<footer class="my-5 text-muted text-center text-small">
  <p class="mb-1">Copyright © 2023 Dinas Komunikasi dan Informatika Tulang Bawang. Developed By <a href="https://api.whatsapp.com/send?phone={{ env('NO_DEV') }}">IT DISKOMINFO</a></p>
</footer>
</main>
@endsection
@push('js')
<script type="text/javascript">
  function previewImg(){
     const imgPreview = document.querySelector('#imgPrev');
     const image = document.querySelector('#image');
     const blob = URL.createObjectURL(image.files[0]);
     imgPreview.src = blob; 
  }
</script>
@endpush

      
    


