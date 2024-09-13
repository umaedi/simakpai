<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{ $title ?? 'Pendaftaran Media Online' }}</title>
      <meta name="description" content="Pendaftaran Media Online Kabupaten Tulang Bawang">
      <meta name="keywords" content="Permohonan surat bebas temuan"/>
      <meta property="og:url" content="{{ url()->current() }}"/>
      <meta property="og:title" content="Pendaftaran Media Online Kabupaten Tulang Bawang"/>
      <meta property="og:description" content="Pendaftaran Media Online Kabupaten Tulang Bawang" />
      <meta property="og:image" content="{{ asset('img/thumbnail.png') }}"/>
      <meta property="og:image:url" content="{{ asset('img/thumbnail.png') }}"/>
      <meta property="twitter:image" content="{{ asset('img/thumbnail.png') }}"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img') }}/favicon.png">
      <!-- CSS here -->
      <link href="{{ asset('css') }}/bootstrap.min.css" rel="stylesheet">
      <link href="{{ asset('css') }}/offcanvas.css" rel="stylesheet">
</head>
<body>
@yield('content')
<script src="{{ asset('js') }}/bootstrap.min.js"></script>
<script src="{{ asset('js') }}/vendor/holder.min.js"></script>
<script src="{{ asset('js') }}/offcanvas.js"></script>
<script type="text/javascript">
   function previewImg(){
      const imgPreview = document.querySelector('#imgPrev');
      const image = document.querySelector('#image');
      const blob = URL.createObjectURL(image.files[0]);
      imgPreview.src = blob; 
   }
</script>
</body>
</html>