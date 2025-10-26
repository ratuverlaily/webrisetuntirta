@extends('pengunjung.users')

@section('content')

<div class="container py-5">
  {{-- Judul --}}
  <div class="text-center mb-4">
    <h2 class="custom-underline text-judul fw-bold" style="letter-spacing: 4px;">
      ROADMAP PENELITIAN
    </h2>
  </div>

  {{-- Card Utama --}}
  <div class="card border-0 shadow-lg rounded-4"
       style="background: linear-gradient(145deg, #f9fbff, #eef3ff);">
    <div class="card-body p-5">


      {{-- Ringkasan --}}
      <div class="card shadow-sm border-0 rounded-4 mb-5">
        <div class="card-body">
          <p class="mb-0">
            SIKRAMA berfokus pada pengembangan IoT, kontrol cerdas, jaringan sensor nirkabel, dan koordinasi sistem multi-agent untuk aplikasi
            monitoring, mitigasi bencana, manajemen energi terbarukan, dan ekosistem pintar berkelanjutan.
          </p>
        </div>
      </div>

      {{-- Roadmap Tabel --}}
      <div class="table-responsive mb-5">
        <table class="table table-bordered align-middle text-center rounded-4 shadow-sm overflow-hidden">
          <thead class="table-primary">
            <tr class="fw-bold text-uppercase">
              <th style="width: 25%;">Fase</th>
              <th style="width: 20%;">Fokus Utama</th>
              <th style="width: 40%;">Ruang Lingkup / Kegiatan</th>
              <th style="width: 15%;">Output</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold text-primary">
                <i class="bi bi-cpu me-1"></i> Fase 1 <br>
                <small class="text-muted">Tahun 1–2</small>
              </td>
              <td>Penguatan Dasar & Infrastruktur</td>
              <td class="text-start">
                <ul class="mb-0">
                  <li>Rancang bangun sistem monitoring berbasis WSN/IoT</li>
                  <li>Model AI prediktif untuk deteksi dini (banjir, longsor, kebakaran)</li>
                  <li>Sistem kendali adaptif & fuzzy</li>
                  <li>Implementasi Edge Computing</li>
                </ul>
              </td>
              <td>
                <span class="badge bg-primary-subtle text-primary">
                  Prototipe awal & publikasi nasional
                </span>
              </td>
            </tr>

            <tr>
              <td class="fw-bold text-success">
                <i class="bi bi-diagram-2 me-1"></i> Fase 2 <br>
                <small class="text-muted">Tahun 3–5</small>
              </td>
              <td>Integrasi Multi-Agent & AI Adaptif</td>
              <td class="text-start">
                <ul class="mb-0">
                  <li>Framework koordinasi multi-agent</li>
                  <li>Reinforcement Learning & Swarm Intelligence</li>
                  <li>Sensor fusion & interoperabilitas edge-cloud</li>
                </ul>
              </td>
              <td>
                <span class="badge bg-success-subtle text-success">
                  Algoritma adaptif & publikasi internasional
                </span>
              </td>
            </tr>

            <tr>
              <td class="fw-bold text-warning">
                <i class="bi bi-globe2 me-1"></i> Fase 3 <br>
                <small class="text-muted">Tahun 6–10</small>
              </td>
              <td>Aplikasi Berkelanjutan & Smart Ecosystem</td>
              <td class="text-start">
                <ul class="mb-0">
                  <li>Manajemen energi terbarukan berbasis multi-agent</li>
                  <li>Sistem Peringatan Dini (EWS) berbasis AI</li>
                  <li>Integrasi AI + IoT + Blockchain</li>
                  <li>Green technology & smart grid lokal</li>
                </ul>
              </td>
              <td>
                <span class="badge bg-warning-subtle text-warning">
                  Pilot project & spin-off
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      {{-- Bidang Turunan & SDGs --}}
      <div class="row g-4">
        {{-- Bidang Turunan --}}
        <div class="col-md-8">
          <div class="card shadow-sm border-0 rounded-4 h-100">
            <div class="card-body">
              <h5 class="fw-bold text-secondary mb-3">
                <i class="bi bi-layers me-2"></i>Bidang Turunan (Subdomain)
              </h5>
              <div class="row">
                <div class="col-sm-6">
                  <ul class="mb-0">
                    <li>Machine Learning & Deep Learning</li>
                    <li>Reinforcement Learning & Swarm Intelligence</li>
                    <li>Sensor Fusion & Data Preprocessing</li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="mb-0">
                    <li>Control Systems: Adaptive, MPC, Fuzzy</li>
                    <li>Wireless Sensor Network & Edge AI</li>
                    <li>Multi-Agent Coordination & Negotiation</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- SDGs --}}
        <div class="col-md-4">
          <div class="card shadow-sm border-0 rounded-4 h-100">
            <div class="card-body">
              <h6 class="fw-bold text-secondary mb-3">
                <i class="bi bi-bullseye me-2"></i>Keterkaitan SDGs
              </h6>
              <ul class="list-unstyled mb-0">
                <li><strong>SDG 7</strong> — Energi bersih & terjangkau</li>
                <li><strong>SDG 9</strong> — Industri, Inovasi & Infrastruktur</li>
                <li><strong>SDG 11</strong> — Kota & komunitas berkelanjutan</li>
                <li><strong>SDG 13</strong> — Aksi terhadap perubahan iklim</li>
                <li><strong>SDG 17</strong> — Kemitraan untuk tujuan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      {{-- CTA --}}
      <div class="text-end mt-5">
        <a href="#" class="btn btn-outline-primary me-2">
          <i class="bi bi-file-earmark-pdf"></i> Download PDF
        </a>
        <a href="#" class="btn btn-primary">
          <i class="bi bi-lightbulb"></i> Gunakan Template Proposal
        </a>
      </div>

    </div>
  </div>
</div>

@push('styles')
<style>
.table th, .table td {
  vertical-align: middle !important;
}
.table thead th {
  background-color: #e8f0fe;
  font-weight: 600;
  letter-spacing: 1px;
}
ul {
  padding-left: 1.2rem;
}
</style>
@endpush

@endsection
