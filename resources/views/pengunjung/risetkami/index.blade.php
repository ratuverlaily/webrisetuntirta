@extends('pengunjung.users')

@section('content')
<div class="container py-5">

  <!-- Judul Halaman -->
  <div class="text-center mb-4">
    <h2 class="custom-underline text-judul fw-bold" style="letter-spacing: 4px;">
      RISET KAMI
    </h2>
  </div>

  <!-- Card Konten Utama -->
  <div class="card border-0 shadow-lg rounded-4"
       style="background: linear-gradient(145deg, #f9fbff, #eef3ff);">
    <div class="card-body p-5">

      <!-- Konten -->
      <div class="content mt-3 pt-2"
           style="line-height: 1.9; font-size: 1.1rem; text-align: justify; color: #333;">

        <!-- Judul Riset -->
        <h4 class="fw-bold mb-4">
          Pengembangan Smart Control Multi-Agent pada Era Revolusi Industri 4.0 dan Society 5.0
          untuk Mewujudkan Tujuan Pembangunan Berkelanjutan (SDGs)
        </h4>

        <!-- Paragraf Pembuka -->
        <p>
          Merupakan penelitian atau inovasi yang berfokus pada penerapan sistem kendali cerdas
          berbasis teknologi multi-agent, yaitu sistem yang terdiri dari beberapa agen pintar
          yang dapat berkomunikasi dan bekerja sama secara otomatis.
          Dalam konteks Revolusi Industri 4.0, teknologi ini memanfaatkan IoT, kecerdasan buatan (AI),
          dan otomatisasi untuk meningkatkan efisiensi serta integrasi sistem.
          Sementara dalam Society 5.0, pendekatannya berorientasi pada kesejahteraan manusia,
          di mana teknologi digunakan untuk memecahkan masalah sosial.
          Secara keseluruhan, pengembangan ini bertujuan untuk mendukung pencapaian
          Tujuan Pembangunan Berkelanjutan (SDGs), seperti efisiensi energi, ketahanan pangan,
          dan peningkatan kualitas hidup masyarakat.
          Dengan integrasi teknologi multi-agent, sistem dapat beradaptasi secara dinamis,
          melakukan pengambilan keputusan kolaboratif, dan menghasilkan solusi yang lebih cerdas,
          efisien, serta berkelanjutan.
        </p>

        <!-- Paragraf dengan Gambar -->
        <div class="row align-items-center mt-4">

          <!-- Kolom Gambar -->
          <!-- Kolom Gambar -->
            <div class="col-md-12 d-flex justify-content-center align-items-center text-center mb-3 mb-md-0">
                <img src="{{ asset('assets/imgriset/gambar2.png') }}"
                    alt="Smart Control Multi-Agent"
                    class="img-fluid rounded-4 shadow-sm"
                    style="max-height: 280px; width: auto; object-fit: cover; display: block; margin: 0 auto;">
            </div>


          <!-- Kolom Penjelasan -->
          <div class="col-md-12 mt-4">
            <p>Tujuan utama penelitian ini adalah mengintegrasikan teknologi Multi-Agent System (MAS) dalam berbagai bidang seperti pertanian, medis, rumah tropis (smart home), dan manufaktur guna mendukung pencapaian Sustainable Development Goals (SDGs). Berdasarkan kerangka kerja SDGs (Gambar 1), pengembangan teknologi cerdas ini diarahkan untuk berkontribusi pada 17 tujuan pembangunan berkelanjutan, termasuk pengentasan kemiskinan, penyediaan energi bersih, peningkatan pendidikan berkualitas, serta penguatan inovasi dan infrastruktur industri.
                Konsep dasar Multi-Agent System (Gambar 2 dan 3) menjelaskan bahwa setiap agen memiliki kemampuan untuk merasakan (perception) kondisi lingkungan, menalar (reasoning) berdasarkan data yang diterima, serta bertindak (actions) sesuai hasil analisis tersebut. Sistem ini bersifat adaptif, mampu belajar dari lingkungan, dan dapat mengambil keputusan otomatis untuk menyesuaikan diri terhadap perubahan kondisi.
                Selanjutnya, ruang lingkup Smart Control Multi-Agent (Gambar 4) menggambarkan penerapan teknologi ini di berbagai sektor, antara lain sektor pertanian untuk pengelolaan sumber daya secara cerdas, sektor medis untuk pemantauan kesehatan berbasis data, sektor rumah tropis untuk menciptakan sistem rumah pintar yang hemat energi, serta sektor manufaktur untuk meningkatkan efisiensi dan produktivitas industri.
                Hubungan antara era dan keberlanjutan (Gambar 5) menunjukkan keterkaitan evolusi teknologi dari Revolusi Industri 4.0 → Smart Control Multi-Agent → Society 5.0 → Sustainability. Artinya, inovasi teknologi yang dikembangkan tidak hanya berfokus pada efisiensi dan otomatisasi industri, tetapi juga diarahkan untuk meningkatkan kesejahteraan manusia serta menjaga keseimbangan lingkungan sebagai wujud nyata dari pembangunan berkelanjutan.</p>
          </div>
        </div>

        <!-- Paragraf dengan Gambar -->
        <div class="row align-items-center mt-4">


            <!-- Kolom Penjelasan -->
            <div class="col-md-7">
              <p>Menggambarkan konsep pengembangan sistem kendali pintar berbasis multi-agent (Smart Control Multi-Agent/SCMA) pada rumah tropis di era Revolusi Industri 4.0 dan Society 5.0. Sistem ini mengintegrasikan mikrokontroler, sensor, dan teknologi Internet of Things (IoT) dengan kecerdasan buatan (Artificial Intelligence) untuk mengatur suhu, kelembaban, dan kenyamanan ruangan secara otomatis. Setiap bangunan memiliki pengendali lokal (Local Controller-Agent) yang bekerja berdasarkan algoritma kendali seperti ON-OFF, PID, Fuzzy Logic, dan ANFIS, sementara pengendali pusat (Central Coordinator-Agent) mengoordinasikan distribusi energi dan pengaturan daya antar bangunan melalui sistem microgrid yang terhubung dengan sumber energi terbarukan seperti panel surya dan turbin angin. Hasil penerapan sistem ini menunjukkan suhu ruang tropis dapat dijaga stabil pada kisaran 25,7°C dengan efisiensi energi hingga 60% serta kualitas udara yang lebih baik, mencerminkan implementasi nyata konsep rumah cerdas hemat energi yang mendukung kehidupan berkelanjutan di era digital.</p>
            </div>

            <!-- Kolom Gambar -->
            <div class="col-md-5 text-center mb-3 mb-md-0">
                <img src="{{ asset('assets/imgriset/gambar3.png') }}"
                     alt="Smart Control Multi-Agent"
                     class="img-fluid rounded-4 shadow-sm"
                     style="max-height: 280px; object-fit: cover;">
            </div>

        </div>

        <!-- Paragraf dengan Gambar -->
        <div class="row align-items-center mt-4">

            <!-- Kolom Gambar -->
            <div class="col-md-5 text-center mb-3 mb-md-0">
                <img src="{{ asset('assets/imgriset/gambar4.png') }}"
                     alt="Smart Control Multi-Agent"
                     class="img-fluid rounded-4 shadow-sm"
                     style="max-height: 280px; object-fit: cover;">
            </div>

            <!-- Kolom Penjelasan -->
            <div class="col-md-7">
                <p>menjelaskan rancangan sistem Smart Control Multi-Agent (SCMA) pada inkubator bayi berbasis IoT dan kecerdasan buatan (Artificial Intelligence) dalam era Revolusi Industri 4.0 dan Society 5.0. Sistem ini terdiri dari beberapa komponen utama, yaitu mikrokontroler ATmega16, sensor SHT11, lampu pemanas, kipas, dan humidifier, yang semuanya berfungsi menjaga suhu dan kelembapan sesuai parameter ideal untuk bayi, yaitu suhu antara 32°C–37°C dan kelembapan 55%–70%. Pada bagian Power System, terdapat rangkaian Power Supply (AC), Zero Crossing Detector, dan Voltage Amplifier, yang berperan mengatur suplai daya listrik ke sistem kendali. Data dari sensor diproses oleh mikrokontroler dengan algoritma kendali cerdas seperti ON-OFF, PID, Fuzzy Logic, dan ANFIS, untuk menjaga keseimbangan energi antara panas yang dihasilkan pemanas dan pendinginan oleh kipas. Selain itu, konsep multi-agent digunakan untuk mengelola interaksi antara pengetahuan, perangkat, dan lingkungan, sehingga sistem mampu beradaptasi secara otomatis terhadap kondisi lingkungan inkubator demi kestabilan suhu dan kelembapan yang optimal bagi bayi.</p>
              </div>

        </div>

        <!-- Paragraf dengan Gambar -->
        <div class="row align-items-center mt-4">

            <!-- Kolom Penjelasan -->
            <div class="col-md-7">
                <p>Merupakan diagram sistem “Pengembangan Smart Control Multi-Agent Era Revolusi Industri 4.0 dan Era Society 5.0 di Bidang Pertanian” yang dikembangkan oleh Universitas Sultan Ageng Tirtayasa. Sistem ini menunjukkan integrasi teknologi Internet of Things (IoT) dan kecerdasan buatan (Artificial Intelligence) untuk mengendalikan kondisi lingkungan di rumah kaca (greenhouse) secara otomatis. Setiap greenhouse dilengkapi sensor untuk mengukur parameter seperti suhu, kelembapan, intensitas cahaya, pH, dan TDS, yang datanya dikirim ke server utama melalui jaringan Wi-Fi atau GPRS dan dapat dipantau lewat PC, smartphone, maupun aplikasi Android. Sistem Multi-Agent bertugas mengatur aktuator seperti pompa, kipas, dan lampu berdasarkan data lingkungan menggunakan algoritma kendali seperti ON-OFF, PID, Fuzzy Logic, dan ANFIS. Selain itu, terdapat rumus perhitungan suhu udara untuk mengatur pemanas dan pendingin sesuai kebutuhan tanaman seperti tomat, mentimun, dan selada agar pertumbuhannya optimal.</p>
            </div>

            <!-- Kolom Gambar -->
            <div class="col-md-5 text-center mb-3 mb-md-0">
                <img src="{{ asset('assets/imgriset/gambar5.png') }}"
                     alt="Smart Control Multi-Agent"
                     class="img-fluid rounded-4 shadow-sm"
                     style="max-height: 280px; object-fit: cover;">
            </div>

        </div>

        <!-- Paragraf dengan Gambar -->
        <div class="row align-items-center mt-4">

            <!-- Kolom Gambar -->
            <div class="col-md-5 text-center mb-3 mb-md-0">
                <img src="{{ asset('assets/imgriset/gambar6.png') }}"
                     alt="Smart Control Multi-Agent"
                     class="img-fluid rounded-4 shadow-sm"
                     style="max-height: 280px; object-fit: cover;">
            </div>

            <!-- Kolom Penjelasan -->
            <div class="col-md-7">
                <p>Menjelaskan konsep Smart Control Multi-Agent (SCMA) pada era Revolusi Industri 4.0 dan Society 5.0 dalam bidang manufaktur. Sistem ini mengintegrasikan berbagai teknologi cerdas seperti Artificial Intelligence, Machine Learning, Big Data, Blockchain, dan Internet of Things (IoT) untuk mengelola proses produksi secara otomatis dan efisien. SCMA terdiri dari beberapa agen, yaitu agent produksi, maintenance, logistik, dan quality, yang saling berkomunikasi melalui jaringan sensor dan robotik. Sistem kendali yang digunakan meliputi ON/OFF, PID Control, Fuzzy Logic, dan ANFIS, dengan dukungan berbagai sensor seperti suhu, tekanan, posisi, dan level air. Dua reaktor dihubungkan dengan sistem ini untuk memantau dan mengatur parameter suhu, tekanan, dan level air secara real-time sesuai setpoint standar, yaitu level air 1000 liter, tekanan 7 bar, dan suhu 220°C.</p>
            </div>
        </div>

        <!-- Paragraf dengan Gambar -->
        <div class="row align-items-center mt-4">

            <!-- Kolom Penjelasan -->
            <div class="col-md-7">
                <p>Menjelaskan tinjauan filosofi dalam memilih judul penelitian yang berfokus pada perkembangan masyarakat dari Society 1.0 hingga Society 5.0. Tahapan tersebut menggambarkan evolusi manusia mulai dari masyarakat pemburu dan pengumpul (Society 1.0), masyarakat pertanian (Society 2.0), masyarakat industri (Society 3.0), masyarakat informasi (Society 4.0), hingga masyarakat super cerdas (Society 5.0). Pada era Society 5.0, teknologi seperti kecerdasan buatan (AI) dan sistem multi-agent digunakan untuk menciptakan solusi cerdas yang berorientasi pada kesejahteraan manusia serta mendukung pencapaian Tujuan Pembangunan Berkelanjutan (SDGs). Beberapa contoh karya ilmiah yang mendukung konsep ini, seperti buku “Intelligent Control Hidroponik Greenhouse” dan “ChatGPT untuk Pendidikan,” menunjukkan penerapan teknologi cerdas dalam berbagai bidang kehidupan.</p>
            </div>

            <!-- Kolom Gambar -->
            <div class="col-md-5 text-center mb-3 mb-md-0">
                <img src="{{ asset('assets/imgriset/gambar1.png') }}"
                     alt="Smart Control Multi-Agent"
                     class="img-fluid rounded-4 shadow-sm"
                     style="max-height: 280px; object-fit: cover;">
            </div>

        </div>

      </div>
    </div>
  </div>
</div>
@endsection
