
@extends('admin.menuKonfigurasi')

@section('content')


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Periode</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 ms-lg-4">

                    <div class="card">
                      <div class="card-body">

                        <h5 class="card-title" style="display: inline-block;">Daftar Tabel Periode Tracer Study</h5>
                        <button type="button" class="btn btn-outline-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Periode</button>

                        <hr>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Periode</th>
                              <th scope="col">Tahun</th>
                              <th scope="col"> </th>
                              <th scope="col"> </th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($periodes as $periode)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$periode->nama_periode}}</td>
                              <td>{{$periode->tahun_periode}}</td>
                              <td><i class="bx bxs-edit bx-sm"></i></td>
                              <td><i class="bx bxs-eraser bx-sm"></td>
                            </tr>
                            @empty
                            <td colspan="5" class="text-center">Tidak ada data...</td>
                            @endforelse
                          </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                      </div>
                    </div>

                </div>

            </div>

      </div>
    </section><!-- End About Section -->

    <!-- The Modal -->
    <div class="modal" id="myModal" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h5 class="modal-title">Tambah Periode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                    <form id="periodeForm" action="{{ route('periode.store') }}" method="POST">
                        <!-- Modal body -->
                        <div class="modal-body">

                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="nama_periode">Nama Periode</label>
                                    <input type="text" class="form-control @error('nama_periode') is-invalid @enderror" id="nama_periode" name="nama_periode" value="{{old('nama_periode')}}">
                                    @error('nama_periode')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="tahun_periode">Tahun</label>
                                    <input type="text" class="form-control @error('tahun_periode') is-invalid @enderror" id="tahun_periode" name="tahun_periode" value="{{old('tahun_periode')}}">
                                    @error('tahun_periode')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-primary" id="submitButton">Tambah</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

@endsection
