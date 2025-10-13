<!doctype html>
<html lang="en">

<head>
    @include('layouts.users.head')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    @include('layouts.users.navbar')

    @yield('content')

    @include('layouts.users.footer')

    <script>
        $(document).ready(function(){
          $("#logo-slider").owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: false,
            responsive: {
              0: { items: 2 },
              576: { items: 3 },
              768: { items: 4 },
              992: { items: 5 }
            }
          });
        });
    </script>

</body>

</html>