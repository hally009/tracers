

@extends('admin.menuKonfigurasi')

@section('content')


    <!-- ======= About Section ======= -->
    <section id="aktor" class="about">
      <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>AKUN</h2>
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
                        <h5 class="card-title" style="display: inline-block;">Daftar Akun Pengguna</h5>
                        <button type="button" class="btn btn-outline-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Pengguna</button>
                        </div>

                        <hr>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Akun</th>
                              <th scope="col">Status Pengguna</th>
                              <th scope="col">Kata Pengguna</th>
                              <th scope="col">Kata Sandi</th>
                              <th scope="col"> </th>

                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($aktors as $aktor)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$aktor->akun}}</td>
                              <td>{{$aktor->status_pengguna}}</td>
                              <td>{{$aktor->kata_pengguna}}</td>
                              <td>{{$aktor->kata_sandi}}</td>
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
                <h5 class="modal-title">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                    <form id="periodeForm" action="{{ route('aktor.store') }}" method="POST">
                        <!-- Modal body -->
                        <div class="modal-body">

                            @csrf

                                <div class="mb-3" id="status_pengguna1">
                                    <label class="form-label" for="status_pengguna">Status Pengguna</label>
                                    <select class="form-select @error('status_pengguna') is-invalid @enderror" id="status_pengguna" name="status_pengguna">
                                        <option value="">Pilih Status Pengguna</option>
                                        <option value="Pengelola Prodi" {{ old('status_pengguna') == 'Pengelola Prodi' ? 'selected' : '' }}>Pengelola Prodi</option>
                                        <option value="BAKPK" {{ old('status_pengguna') == 'BAKPK' ? 'selected' : '' }}>BAKPK</option>
                                        <option value="Responden" {{ old('status_pengguna') == 'Responden' ? 'selected' : '' }}>Responden</option>
                                    </select>
                                    @error('tahun_periode')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3" id="kata_pengguna1">
                                    <label class="form-label" for="kata_pengguna">Kata Pengguna</label>
                                    <input type="text" class="form-control @error('nama_periode') is-invalid @enderror" id="kata_pengguna" name="kata_pengguna" value="{{old('kata_pengguna')}}">
                                    @error('kata_pengguna')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3" id="kata_sandi1">
                                    <label class="form-label" for="kata_sandi">Kata Sandi</label>
                                    <input type="text" class="form-control @error('tahun_periode') is-invalid @enderror" id="kata_sandi" name="kata_sandi" value="{{old('kata_sandi')}}">
                                    @error('kata_sandi')
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

    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        @if($errors->any())
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                myModal.show();
            });
        @endif
    </script>

@endsection
