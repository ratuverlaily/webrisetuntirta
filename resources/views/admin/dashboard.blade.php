@extends('layouts_admin.admin_logistik')

@section('content')

    <section class="cards">
      <div class="card">
        <h3>Total Barang</h3>
        <p>1,250</p>
      </div>
      <div class="card">
        <h3>Pengiriman Aktif</h3>
        <p>320</p>
      </div>
      <div class="card">
        <h3>Penerimaan</h3>
        <p>150</p>
      </div>
      <div class="card">
        <h3>Supplier</h3>
        <p>45</p>
      </div>
    </section>

    <section class="table-section">
      <h2>Data Pengiriman Terbaru</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Barang</th>
            <th>Tujuan</th>
            <th>Status</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>Mesin A</td>
            <td>Jakarta</td>
            <td><span class="status success">Selesai</span></td>
            <td>18-08-2025</td>
          </tr>
          <tr>
            <td>002</td>
            <td>Sparepart B</td>
            <td>Bandung</td>
            <td><span class="status warning">Proses</span></td>
            <td>17-08-2025</td>
          </tr>
          <tr>
            <td>003</td>
            <td>Alat C</td>
            <td>Surabaya</td>
            <td><span class="status danger">Tertunda</span></td>
            <td>16-08-2025</td>
          </tr>
        </tbody>
      </table>
    </section>

  @endsection
