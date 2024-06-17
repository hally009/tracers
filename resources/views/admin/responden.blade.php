

@extends('admin.menuKonfigurasi')

@section('content')


    <!-- ======= About Section ======= -->
    <section id="responden" class="about">
      <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>RESPONDEN</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 ms-lg-4">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card">
                      <div class="card-body">
                        <div>
                        <h5 class="card-title" style="display: inline-block;">Daftar Responden Tracer Study</h5>
                        <button type="button" class="btn btn-outline-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Responden</button>
                        </div>

                        <hr>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">NIM</th>
                              <th scope="col">Nama Responden</th>
                              <th scope="col">Prodi</th>
                              <th scope="col">No Ijazah</th>
                              <th scope="col"> </th>

                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($respondens as $responden)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$responden->nim_responden}}</td>
                              <td>{{$responden->nama_responden}}</td>
                              <td>{{$responden->prodi}}</td>
                              <td>{{$responden->no_ijazah}}</td>
                              <td><i class="bx bxs-edit bx-sm" style=" color:cornflowerblue";></i>
                              <i class="bx bxs-eraser bx-sm" style=" color: cornflowerblue";></td>
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
                <h5 class="modal-title">Tambah Responden</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                    <form id="respondenForm" action="{{ route('responden.store') }}" method="POST">
                        <!-- Modal body -->
                        <div class="modal-body">

                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="nim_responden">NIM</label>
                                    <input type="text" class="form-control @error('nim_responden') is-invalid @enderror" id="nim_responden" name="nim_responden" value="{{old('nim_responden')}}">
                                    @error('nim_responden')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="nama_periode">Nama Responden</label>
                                    <input type="text" class="form-control @error('nama_responden') is-invalid @enderror" id="nama_responden" name="nama_responden" value="{{old('nama_responden')}}">
                                    @error('nama_responden')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="prodi">Prodi</label>
                                    <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" value="{{old('prodi')}}">
                                    @error('prodi')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="no_ijazah">Nomor Ijazah</label>
                                    <input type="text" class="form-control @error('no_ijazah') is-invalid @enderror" id="no_ijazah" name="no_ijazah" value="{{old('no_ijazah')}}">
                                    @error('no_ijazah')
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

    <script>
        @if($errors->any())
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                myModal.show();
            });
        @endif
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
          $('.datatable').DataTable();
        });
    </script>

@endsection
