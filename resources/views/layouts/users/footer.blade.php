<footer class="text-center text-lg-start text-white footer-color">

    <section class="">
      <div class="container text-center text-md-start mt-5">

        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h3 class="text-uppercase fw-bold text-white judul1">SIKRAMA</h3>
            <p class="text-white foot">
                Jl. Raya Palka Km 3 Sindangsari, Pabuaran, Kab. Serang Provinsi Banten<br/>
                <i class="fas fa-phone mr-3"></i>&nbsp;&nbsp;  Telp : +62254 3204321<br/>
                <i class="fas fa-print mr-3"></i>&nbsp;&nbsp;  Fax : +62254 281254<br/>
                <i class="fas fa-envelope mr-3"></i>&nbsp;&nbsp;  Email : humas@untirta.ac.id<br/>
            </p>
            <br/>
            <p class="text-white">
                Media Sosial<br/>
                <a href="" class="text-white me-4">
                <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                <i class="fab fa-youtube"></i>
                </a>
                <a href="" class="text-white me-4">
                <i class="fab fa-twitter"></i>
                </a>
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-color judul">Tentang Kami</h5>
                <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color:rgb(255, 255, 255); height: 2px"
                />
                <ul class="nav flex-column foot">
                    <li class="nav-item mb-2"><a href="{{ asset('tentang/visimisi') }}" class="nav-link p-0 hove text-color {{ request()->is('tentang/visimisi') ? 'active' : '' }}" target="_blank">Visi & Misi</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('tentang/fokuspenelitian') }}" class="nav-link p-0 hove text-color {{ request()->is('tentang/fokuspenelitian') ? 'active' : '' }}" target="_blank">Fokus Penelitian</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('tentang/roadmap') }}" class="nav-link p-0 hove text-color {{ request()->is('tentang/roadmap') ? 'active' : '' }}" target="_blank">Roadmap Penelitian</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('tentang/mitra') }}" class="nav-link p-0 hove text-color {{ request()->is('tentang/mitra') ? 'active' : '' }}" target="_blank">Mitra Kerjasama</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('tentang/fasilitas') }}" class="nav-link p-0 hove text-color {{ request()->is('tentang/fasilitas') ? 'active' : '' }}" target="_blank">Fasilitas</a></li>
                </ul>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-color judul">Kegiatan</h5>
                <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color:rgb(255, 255, 255); height: 2px"
                />
                <ul class="nav flex-column foot">
                    <li class="nav-item mb-2"><a href="{{ asset('kegiatan/sfw') }}" class="nav-link p-0 hove text-color {{ request()->is('kegiatan/sfw') ? 'active' : '' }}" target="_blank">Seminar, FGD, Workshop</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('kegiatan/penelitian') }}" class="nav-link p-0 hove text-color {{ request()->is('kegiatan/penelitian') ? 'active' : '' }}" target="_blank">Penelitian</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('kegiatan/pengabdian') }}" class="nav-link p-0 hove text-color {{ request()->is('kegiatan/pengabdian') ? 'active' : '' }}" target="_blank">Pengabdian Masyarakat</a></li>
                 </ul>
          </div>

          <div class="col-md col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-color judul ">Publikasi</h5>
                <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color:rgb(255, 255, 255); height: 2px"
                />
                <ul class="nav flex-column foot">
                    <li class="nav-item mb-2"><a href="{{ asset('publikasi/artikel') }}" class="nav-link p-0 hove text-color {{ request()->is('publikasi/artikel') ? 'active' : '' }}" target="_blank">Artikel Jurnal</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('publikasi/buku') }}" class="nav-link p-0 hove text-color {{ request()->is('publikasi/buku') ? 'active' : '' }}" target="_blank">Buku</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('publikasi/seminar') }}" class="nav-link p-0 hove text-color {{ request()->is('publikasi/seminar') ? 'active' : '' }}" target="_blank">Publikasi Seminar</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('publikasi/makala') }}" class="nav-link p-0 hove text-color {{ request()->is('publikasi/makala') ? 'active' : '' }}" target="_blank">Makala</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('publikasi/paper') }}" class="nav-link p-0 hove text-color {{ request()->is('publikasi/paper') ? 'active' : '' }}" target="_blank">Warking Paper</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('publikasi/chapter') }}" class="nav-link p-0 hove text-color {{ request()->is('publikasi/chapter') ? 'active' : '' }}" target="_blank">Chapters</a></li>
                </ul>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-color judul">Daftar Menu</h5>
                <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color:rgb(255, 255, 255); height: 2px"
                />
                <ul class="nav flex-column foot">
                    <li class="nav-item mb-2"><a href="{{ asset('anggota') }}" class="nav-link p-0 hove text-color {{ request()->is('anggota') ? 'active' : '' }}" target="_blank">Peneliti dan Staff Peneliti</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('gallery') }}" class="nav-link p-0 hove text-color {{ request()->is('gallery') ? 'active' : '' }}" target="_blank">Galeri</a></li>
                    <li class="nav-item mb-2"><a href="{{ asset('kontak') }}" class="nav-link p-0 hove text-color {{ request()->is('kontak') ? 'active' : '' }}" target="_blank">Kontak</a></li>
                </ul>
          </div>

      </div>
    </section>

    <div class="footer-bottom text-center">
        <p class="mb-0">Copyright@2025 SIKRAMA UNTIRTA</p>
    </div>

</footer>


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>