@extends('pengunjung.users')

@section('content')

<section id="blog" style="background:#f0f2f5; padding:50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <div class="intro">
                    <h2 style="letter-spacing: 8px; color:#004080; border-bottom: 2px solid #004080; display:inline-block;">PENELITIAN</h2>
                </div>
            </div>
        </div>

        <div class="col-12 p-5 " style="background:white;">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jenis Hibah</th>
                            <th>Judul Penelitian</th>
                            <th>Pendanaan</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penelitians as $index => $row)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="text-center">{{ $row->tahun }}</td>
                            <td>{{ $row->jenis_hibah }}</td>
                            <td>{{ $row->judul_penelitian }}</td>
                            <td class="text-center">{{ $row->pendanaan }}</td>
                            <td class="text-center">
                            @if($row->link)
                                <a href="{{ $row->link }}" target="_blank" class="btn btn-sm btn-primary">Lihat</a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
