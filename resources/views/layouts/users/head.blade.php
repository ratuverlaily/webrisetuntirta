  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet" />

  <!-- Menambahkan Favicon (ikon gambar) -->
  <link rel="icon" href="{{ asset('assets/img/untir.png')}}" type="image/x-icon">

  <!--<link href="{{ asset('assets/css/brands.css') }}" rel="stylesheet" />-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">


  <title>Untirta - Pusat Reset Untirta</title>

 <style>
     /* slide */
     .slide {
         min-height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
         position: relative;
     }

     .slide1 {
         background:url('{{ asset("assets/img/bg.jpg")}}');
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }

     .slide2 {
         background: url('{{ asset("assets/imgbr/bgweb6.jpg") }}');
         /*linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset("assets/img/bguntirta.jpg") }}');*/
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }

     .slide3 {
         background: url('{{ asset("assets/img/bguntirta3.jpg") }}');
         /*linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset("assets/img/bguntirta.jpg") }}');*/
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }


     .slide4 {
         background: url('{{ asset("assets/img/bguntirta1.jpg") }}');
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }

     .div-container {
         width: 300px; /* Contoh lebar div */
         height: 200px; /* Contoh tinggi div */
         overflow: hidden; /* Menyembunyikan bagian gambar yang keluar dari div */
     }

     .img-responsive {
         max-width: 100%;
         max-height: 100%;
         width: auto;
         height: auto;
     }
 </style>