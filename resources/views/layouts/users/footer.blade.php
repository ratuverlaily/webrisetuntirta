<!-- === FOOTER DENGAN MAP LOKASI UNTIRTA SINDANGSARI (AKURAT) === -->
<footer class="text-center text-lg-start text-white footer-color">

    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">

          <!-- Informasi Kontak -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h3 class="text-uppercase fw-bold text-white judul1">SIKRAMA</h3>
            <p class="text-white foot">
              Jl. Raya Palka No.Km.3, Sindangsari, Kec. Pabuaran, Kota Serang, Banten 42163<br/>
              <i class="fas fa-phone mr-3"></i>&nbsp;&nbsp;Telp : +62 254 3204321<br/>
              <i class="fas fa-print mr-3"></i>&nbsp;&nbsp;Fax : +62 254 281254<br/>
              <i class="fas fa-envelope mr-3"></i>&nbsp;&nbsp;Email : humas@untirta.ac.id<br/>
            </p>
            <br/>
            <p class="text-white">
              Media Sosial<br/>
              <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-youtube fa-lg"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
            </p>
          </div>

          <!-- Tentang Kami -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h5 class="text-color judul">Tentang Kami</h5>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width:60px;background-color:#fff;height:2px"/>
            <ul class="nav flex-column foot">
              <li class="nav-item mb-2"><a href="{{ asset('tentang/visimisi') }}" class="nav-link p-0 hove text-color" target="_blank">Visi & Misi</a></li>
              <li class="nav-item mb-2"><a href="{{ asset('tentang/fokuspenelitian') }}" class="nav-link p-0 hove text-color" target="_blank">Fokus Penelitian</a></li>
              <li class="nav-item mb-2"><a href="{{ asset('tentang/roadmap') }}" class="nav-link p-0 hove text-color" target="_blank">Roadmap Penelitian</a></li>
              <li class="nav-item mb-2"><a href="{{ asset('tentang/mitra') }}" class="nav-link p-0 hove text-color" target="_blank">Mitra Kerjasama</a></li>
              <li class="nav-item mb-2"><a href="{{ asset('tentang/fasilitas') }}" class="nav-link p-0 hove text-color" target="_blank">Fasilitas</a></li>
            </ul>
          </div>

          <!-- Menu -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h5 class="text-color judul">Daftar Menu</h5>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width:60px;background-color:#fff;height:2px"/>
            <ul class="nav flex-column foot">
              <li class="nav-item mb-2"><a href="{{ asset('artikel/view') }}" class="nav-link p-0 hove text-color" target="_blank">Artikel Penelitian</a></li>
              <li class="nav-item mb-2"><a href="{{ asset('risetkami/view') }}" class="nav-link p-0 hove text-color" target="_blank">Riset Kami</a></li>
              <li class="nav-item mb-2"><a href="{{ asset('anggota/view') }}" class="nav-link p-0 hove text-color" target="_blank">Peneliti & Staff</a></li>
              <li class="nav-item mb-2"><a href="{{ asset('kontak/view') }}" class="nav-link p-0 hove text-color" target="_blank">Kontak</a></li>
            </ul>
          </div>

          <!-- MAP UNTIRTA SINDANGSARI (AKURAT) -->
          <div class="col-md-5 col-lg-4 col-xl-3 mx-auto mb-4">
            <h5 class="text-color judul">Lokasi Kami</h5>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width:60px;background-color:#fff;height:2px"/>
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0761527672523!2d106.12503977475262!3d-6.190010760783378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42029d65ecb30b%3A0x2c13f97c36a8ab9f!2sUniversitas%20Sultan%20Ageng%20Tirtayasa%20-%20Kampus%20Sindangsari!5e0!3m2!1sid!2sid!4v1730045401123!5m2!1sid!2sid"
                width="100%" height="270" style="border:0;border-radius:10px;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
            <div class="text-center mt-2">
              <span class="fw-bold text-white">Universitas Sultan Ageng Tirtayasa</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <div class="footer-bottom text-center">
      <p class="mb-0">Copyright © 2025 SIKRAMA UNTIRTA</p>
    </div>
  </footer>

  <!-- SCRIPT -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>

  <!-- RESPONSIVE MAP STYLE -->
  <style>
    .map-responsive {
      overflow: hidden;
      padding-bottom: 60%;
      position: relative;
      height: 0;
    }
    .map-responsive iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>
