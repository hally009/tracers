
@extends('admin.menuKonfigurasi')

@section('content')

<section id="kuis" class="about">
    <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>KUISIONER</h2>
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
                            <h5 class="card-title" style="display: inline-block;">Kuisioner Tracer Study</h5>
                        </div>
                        <hr>

                      <!-- Table with stripped rows -->
                        <div class="container mt-5">
                        <form action="" method="POST" id="sliderForm">
                          <!-- Section 1 -->
                          <div class="form-section current-section" id="section1">
                            <!-- Content for section 1 -->
                            <div class="card">
                              <div class="card-body">
                                <h5>IDENTITAS</h5>
                                <hr>
                                <!-- Add your form fields for section 1 here -->
                                <div class="mb-3">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3" id="id1">
                                                <label class="form-label" for="nim"><strong>NIM</strong></label>
                                                <input type="text" id="nim" name="nim" value="{{ old('nim') }}"
                                                class="form-control @error('nim') is-invalid @enderror">
                                                @error('nim')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <!-- Input field for NIM -->
                                            </div>
                                            <div class="mb-3" id="id2">
                                                <label class="form-label" for="kodept"><strong>Kode PT</strong></label>
                                                <input type="text" id="nim" name="kodept" value="005027"
                                                class="form-control @error('kodept') is-invalid @enderror">
                                                @error('kodept')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <!-- Input field for Kode PT -->
                                            </div>
                                            <!-- Add more label-input pairs for the first column -->
                                            <div class="mb-3" id="id3">
                                              <label class="form-label" for="tahun_lulus"><strong>Tahun Lulus</strong></label>
                                              <input type="text" id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}"
                                                class="form-control @error('tahun_lulus') is-invalid @enderror">
                                                @error('tahun_lulus')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                              <!-- Input field for Tahun Lulus -->
                                          </div>
                                          <div class="mb-3" id="id4">
                                              <label class="form-label" for="prodi"><strong>Kode Prodi</strong></label>
                                              <input type="text" id="prodi" name="prodi" value="{{ old('prodi') }}"
                                                class="form-control @error('prodi') is-invalid @enderror">
                                                @error('prodi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                              <!-- Input field for Kode Prodi -->
                                          </div>
                                          <!-- Add more label-input pairs for the second column -->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3" id="id5">
                                                <label class="form-label" for="nama_responden"><strong>Nama Responden</strong></label>
                                                <input type="text" id=nama_responden" name="nama_responden" value="{{ old('nama_responden') }}"
                                                class="form-control @error('nama_responden') is-invalid @enderror">
                                                @error('nama_responden')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <!-- Input field for Tahun Lulus -->
                                            </div>
                                            <div class="mb-3" id="id6">
                                                <label class="form-label" for="tlp"><strong>Nomor Telepon/HP</strong></label>
                                                <input type="text" id="tlp" name="tlp" value="{{ old('tlp') }}"
                                                class="form-control @error('tlp') is-invalid @enderror">
                                                @error('tlp')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <!-- Input field for Kode Prodi -->
                                            </div>
                                            <!-- Add more label-input pairs for the second column -->
                                            <div class="mb-3" id="id7">
                                              <label class="form-label" for="email"><strong>Alamat Email</strong></label>
                                              <input type="text" id="email" name="email" value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror">
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                              <!-- Input field for Tahun Lulus -->
                                          </div>
                                          <div class="mb-3" id="id8">
                                              <label class="form-label" for="nik"><strong>NIK</strong></label>
                                              <input type="text" id="nik" name="nik" value="{{ old('nik') }}"
                                                class="form-control @error('nik') is-invalid @enderror">
                                                @error('nik')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                              <!-- Input field for Kode Prodi -->
                                          </div>
                                          <!-- Add more label-input pairs for the second column -->
                                        </div>
                                    </div>
                                    <!-- Rest of your form content -->


                                </div>
                              </div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary" onclick="moveSection(1)">Selanjutnya</button>
                          </div>

                          <!-- Section 2 -->
                          <div class="form-section" id="section2">
                            <!-- Content for section 2 -->
                            <div class="card">
                              <div class="card-body">
                                <h5>Bekerja (full time / part time)</h5>
                                <hr>
                                <!-- Add your form fields for section 2 here -->
                                <div class="mb-3" id="soal1">
                                  <label class="form-label"><strong>Apakah Anda telah mendapatkan pekerjaan <= 6 bulan / termasuk bekerja sebelum
                                    lulus? </strong></label>
                                    <div class="d-flex">
                                      <div class="form-check me-3">

                                        <input class="form-check-input" type="radio" name="bkj1"
                                        id="ya" value="Ya"
                                        {{ old('bkj1')=='ya' ? 'checked': '' }}>
                                        <label class="form-check-label" for="bekerja">Ya</label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="bkj1"
                                        id="tidak" value="Tidak"
                                        {{ old('bkj1')=='tidak' ? 'checked': '' }}>
                                        <label class="form-check-label" for="wiraswasta">Tidak</label>

                                      </div>
                                    </div>
                                      @error('bkj1')
                                        <div class="text-danger">{{ $message }}</div>
                                      @enderror
                                </div>
                                <div class="mb-3" id="soal2">
                                    <label class="form-label"><strong>Dalam berapa bulan Anda mendapatkan pekerjaan ?</strong></label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="bkj2"
                                            id="bkj21" value="< 1 Bulan"
                                            {{ old('bkj2')=='< 1 Bulan' ? 'checked': '' }}>
                                            <label class="form-check-label" for="< 1 Bulan"> < 1 Bulan</label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj2"
                                            id="bkj22" value="1 - 3 Bulan"
                                            {{ old('bkj2')=='1 - 3 Bulan' ? 'checked': '' }}>
                                            <label class="form-check-label" for="1 - 3 Bulan">1 - 3 Bulan</label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj2"
                                            id="bkj23" value="3 - 6 Bulan"
                                            {{ old('bkj2')=='3 - 6 Bulan' ? 'checked': '' }}>
                                            <label class="form-check-label" for="3 - 6 Bulan">3 - 6 Bulan</label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj2"
                                            id="bkj24" value="> 6 Bulan"
                                            {{ old('bkj2')=='> 6 Bulan' ? 'checked': '' }}>
                                            <label class="form-check-label" for="> 6 Bulan"> > 6 Bulan</label>
                                        </div>
                                        @error('bkj2')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3" id="soal3">
                                    <label class="form-label"><strong>Berapa rata-rata pendapatan Anda per bulan? (take home pay)? </strong></label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <select class="form-select" name="bkj3" id="bkj3" value="{{ old('bkj3') }}">
                                                <option value="< Rp. 1.000.000"
                                                {{ old('bkj3')=='< Rp. 1.000.000' ? 'selected': '' }} >
                                                < Rp. 1.000.000
                                                </option>
                                                <option value="> Rp. 1.000.000 - Rp. 3.000.000"
                                                {{ old('bkj3')=='> Rp. 1.000.000 - Rp. 3.000.000' ? 'selected': '' }} >
                                                > Rp. 1.000.000 - Rp. 3.000.000
                                                </option>
                                                <option value="> Rp. 3.000.000 - Rp. 5.000.000"
                                                {{ old('bkj3')=='> Rp. 3.000.000 - Rp. 5.000.000' ? 'selected': '' }} >
                                                > Rp. 3.000.000 - Rp. 5.000.000
                                                </option>
                                                <option value="> Rp. 5.000.000 - Rp. 7.500.000"
                                                {{ old('bkj3')=='> Rp. 5.000.000 - Rp. 7.500.000' ? 'selected': '' }} >
                                                > Rp. 5.000.000 - Rp. 7.500.000
                                                </option>
                                                <option value="> Rp. 7.500.000 - Rp. 10.000.000"
                                                {{ old('bkj3')=='> Rp. 7.500.000 - Rp. 10.000.000' ? 'selected': '' }} >
                                                > Rp. 7.500.000 - Rp. 10.000.000
                                                </option>
                                                <option value="> Rp. 10.000.000 - Rp. 12.500.000"
                                                {{ old('bkj3')=='> Rp. 10.000.000 - Rp. 12.500.000' ? 'selected': '' }} >
                                                > Rp. 10.000.000 - Rp. 12.500.000
                                                </option>
                                                <option value="> Rp. 12.500.000- Rp. 15.000.000"
                                                {{ old('bkj3')=='> Rp. 12.500.000- Rp. 15.000.000' ? 'selected': '' }} >
                                                > Rp. 12.500.000- Rp. 15.000.000
                                                </option>
                                                <option value="> Rp. 15.000.000"
                                                {{ old('bkj3')=='> Rp. 15.000.000' ? 'selected': '' }} >
                                                > Rp. 15.000.000
                                                </option>
                                            </select>
                                            @error('bkj3')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3" id="soal4">
                                  <label class="form-label"><strong>Dimana lokasi tempat Anda bekerja? </strong></label><br>
                                    <select class="form-select" id="provinsiDropdown" onchange="changeKota()">
                                      <option selected disabled>Pilih Provinsi...</option>
                                      <!-- Isi dengan data provinsi -->
                                      <!-- <option value="10000">Prov. D.K.I. Jakarta</option> -->
                                      <!-- Tambahkan data provinsi sesuai format -->
                                    </select> <br>
                                    <select class="form-select" id="kotaDropdown">
                                      <option selected disabled>Pilih Kota/Kabupaten...</option>
                                      <!-- Isi dengan data kota/kabupaten -->
                                      <!-- <option value="10100">Kab. Kepulauan Seribu</option> -->
                                      <!-- Tambahkan data kota/kabupaten sesuai format -->
                                    </select>
                                </div>
                                <div class="mb-3" id="soal5">
                                    <label class="form-label"><strong>Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang ? </strong></label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="bkj5"
                                            id="pemerintah" value="pemerintah"
                                            {{ old('bkj5')=='pemerintah' ? 'checked': '' }}>
                                            <label class="form-check-label" for="pemerintah">Intansi pemerintah</label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj5"
                                            id="bumn" value="bumn"
                                            {{ old('bkj5')=='bumn' ? 'checked': '' }}>
                                            <label class="form-check-label" for="bumn">BUMN/BUMD </label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj5"
                                            id="multilateral" value="multilateral"
                                            {{ old('bkj5')=='multilateral' ? 'checked': '' }}>
                                            <label class="form-check-label" for="multilateral">Institusi/Organisasi Multilateral</label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj5"
                                            id="non-profit" value="non-profit"
                                            {{ old('bkj5')=='non-profit' ? 'checked': '' }}>
                                            <label class="form-check-label" for="non-profit">Organisasi non-profit/Lembaga Swadaya Masyarakat</label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj5"
                                            id="swasta" value="swasta"
                                            {{ old('bkj5')=='swasta' ? 'checked': '' }}>
                                            <label class="form-check-label" for="swasta">Perusahaan swasta</label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj5"
                                            id="wiraswasta" value="wiraswasta"
                                            {{ old('bkj5')=='W' ? 'checked': '' }}>
                                            <label class="form-check-label" for="wiraswasta">Wiraswasta/perusahaan sendiri</label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="bkj5" id="lainnyaIsiSendiri" value="custom"
                                                {{ old('bkj5') == 'custom' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="lainnyaIsiSendiri">Lainnya, Tuliskan</label>

                                            <!-- Input tambahan yang akan muncul ketika "Lainnya, isi sendiri" dipilih -->
                                            <div id="customInput" style="display: none;">
                                                <input type="text" id="customText" name="customText">
                                            </div>
                                        </div>
                                    </div>
                                    @error('bkj5')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary" onclick="moveSection(-1)">Sebelumnya</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                          </div>

                        </form>
                        </div>
                      <!-- End Table with stripped rows -->

                    </div>
                 </div>

              </div>
          </div>

    </div>
</section><!-- End About Section -->

<script>
  let currentSection = 1;
  const sections = document.querySelectorAll('.form-section');

  function showSection(sectionNum) {
    sections.forEach(section => {
      section.classList.remove('current-section');
    });

    sections[sectionNum - 1].classList.add('current-section');
    currentSection = sectionNum;
  }

  function moveSection(step) {
    const newSection = currentSection + step;

    if (newSection >= 1 && newSection <= sections.length) {
      showSection(newSection);
    }
  }

  showSection(currentSection);
</script>

<!-- Bootstrap JS, Popper.js, and jQuery (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Data provinsi
  const provinsiData = [
    { id:10000, name: 'Prov. D.K.I. Jakarta' },
    { id:20000, name: 'Prov. Jawa Barat' },
    { id:50000, name: 'Prov. Jawa Timur' },
    { id:90000, name: 'Prov. Riau' },
    { id:100000, name: 'Prov. Jambi' },
    { id:200000, name: 'Prov. Sulawesi Tenggara' },
    { id:210000, name: 'Prov. Maluku' },
    { id:320000, name: 'Prov. Papua Barat' },
    { id:330000, name: 'Prov. Sulawesi Barat' },
    { id:350000, name: 'Luar Negeri' },
    { id:300000, name: 'Prov. Gorontalo' },
    { id:80000, name: 'Prov. Sumatera Barat' },
    { id:180000, name: 'Prov. Sulawesi Tengah' },
    { id:190000, name: 'Prov. Sulawesi Selatan' },
    { id:270000, name: 'Prov. Maluku Utara' },
    { id:280000, name: 'Prov. Banten' },
    { id:70000, name: 'Prov. Sumatera Utara' },
    { id:170000, name: 'Prov. Sulawesi Utara' },
    { id:250000, name: 'Prov. Papua' },
    { id:260000, name: 'Prov. Bengkulu' },
    { id:40000, name: 'Prov. D.I. Yogyakarta' },
    { id:60000, name: 'Prov. Aceh' },
    { id:240000, name: 'Prov. Nusa Tenggara Timur' },
    { id:110000, name: 'Prov. Sumatera Selatan' },
    { id:30000, name: 'Prov. Jawa Tengah' },
    { id:290000, name: 'Prov. Kepulauan Bangka Belitung' },
    { id:120000, name: 'Prov. Lampung' },
    { id:130000, name: 'Prov. Kalimantan Barat' },
    { id:340000, name: 'Prov. Kalimantan Utara' },
    { id:310000, name: 'Prov. Kepulauan Riau' },
    { id:160000, name: 'Prov. Kalimantan Timur' },
    { id:230000, name: 'Prov. Nusa Tenggara Barat' },
    { id:140000, name: 'Prov. Kalimantan Tengah' },
    { id:150000, name: 'Prov. Kalimantan Selatan' },
    { id:220000, name: 'Prov. Bali' },


    // Tambahkan data provinsi sesuai format
  ];

  // Data kota/kabupaten
  const kotaData = [
    { provinsiId: 10000, id: 10100, name: 'Kab. Kepulauan Seribu' },
    { provinsiId: 10000, id:16000, name: 'Kota Jakarta Pusat' },
    { provinsiId: 10000, id:16100, name: 'Kota Jakarta Utara' },
    { provinsiId: 10000, id:16200, name: 'Kota Jakarta Barat' },
    { provinsiId: 10000, id:16300, name: 'Kota Jakarta Selatan' },
    { provinsiId: 10000, id:16400, name: 'Kota Jakarta Timur' },
    { provinsiId: 20000, id:20500, name: 'Kab. Bogor' },
    { provinsiId: 50000, id:51900, name: 'Kab. Pasuruan' },
    { provinsiId: 50000, id:52900, name: 'Kab. Bangkalan' },
    { provinsiId: 50000, id:56000, name: 'Kota Surabaya' },
    { provinsiId: 90000, id:91000, name: 'Kab. Rokan Hilir' },
    { provinsiId: 90000, id:91100, name: 'Kab. Siak' },
    { provinsiId: 100000, id:100600, name: 'Kab. Tebo' },
    { provinsiId: 100000, id:100700, name: 'Kab. Muaro Jambi' },
    { provinsiId: 100000, id:100800, name: 'Kab. Tanjung Jabung Timur' },
    { provinsiId: 200000, id:200700, name: 'Kab. Bombana' },
    { provinsiId: 200000, id:200800, name: 'Kab. Kolaka Utara' },
    { provinsiId: 210000, id:210700, name: 'Kab. Kepulauan Aru' },
    { provinsiId: 210000, id:210800, name: 'Kab. Maluku Barat Daya' },
    { provinsiId: 320000, id:326000, name: 'Kota Sorong' },
    { provinsiId: 330000, id:330100, name: 'Kab. Mamuju' },
    { provinsiId: 330000, id:330200, name: 'Kab. Pasangkayu' },
    { provinsiId: 50000, id:50700, name: 'Kab. Lamongan' },
    { provinsiId: 50000, id:51400, name: 'Kab. Nganjuk' },
    { provinsiId: 50000, id:51500, name: 'Kab. Blitar' },
    { provinsiId: 90000, id:90400, name: 'Kab. Indragiri Hulu' },
    { provinsiId: 90000, id:90500, name: 'Kab. Indragiri Hilir' },
    { provinsiId: 100000, id:100200, name: 'Kab. Bungo' },
    { provinsiId: 100000, id:100300, name: 'Kab. Sarolangun' },
    { provinsiId: 200000, id:200300, name: 'Kab. Buton' },
    { provinsiId: 200000, id:200400, name: 'Kab. Kolaka' },
    { provinsiId: 210000, id:210200, name: 'Kab. Maluku Tenggara' },
    { provinsiId: 300000, id:300200, name: 'Kab. Gorontalo' },
    { provinsiId: 300000, id:300300, name: 'Kab. Pohuwato' },
    { provinsiId: 300000, id:300400, name: 'Kab. Bone Bolango' },
    { provinsiId: 320000, id:320700, name: 'Kab. Sorong' },
    { provinsiId: 50000, id:50200, name: 'Kab. Sidoarjo' },
    { provinsiId: 50000, id:50800, name: 'Kab. Madiun' },
    { provinsiId: 80000, id:80400, name: 'Kab. Solok' },
    { provinsiId: 90000, id:90800, name: 'Kab. Pelalawan' },
    { provinsiId: 180000, id:181000, name: 'Kab. Sigi' },
    { provinsiId: 190000, id:192400, name: 'Kab. Luwu Utara' },
    { provinsiId: 190000, id:192600, name: 'Kab. Luwu Timur' },
    { provinsiId: 270000, id:276100, name: 'Kota Tidore Kepulauan' },
    { provinsiId: 280000, id:280100, name: 'Kab. Pandeglang' },
    { provinsiId: 300000, id:300500, name: 'Kab. Gorontalo Utara' },
    { provinsiId: 50000, id:50400, name: 'Kab. Jombang' },
    { provinsiId: 50000, id:50500, name: 'Kab. Bojonegoro' },
    { provinsiId: 50000, id:51000, name: 'Kab. Magetan' },
    { provinsiId: 70000, id:72100, name: 'Kab. Serdang Bedagai' },
    { provinsiId: 70000, id:72200, name: 'Kab. Batubara' },
    { provinsiId: 70000, id:72300, name: 'Kab. Padang Lawas utara' },
    { provinsiId: 80000, id:80700, name: 'Kab. Tanah Datar' },
    { provinsiId: 170000, id:170200, name: 'Kab. Minahasa' },
    { provinsiId: 180000, id:180300, name: 'Kab. Poso' },
    { provinsiId: 180000, id:180400, name: 'Kab. Banggai' },
    { provinsiId: 250000, id:253300, name: 'kab. Puncak' },
    { provinsiId: 260000, id:260700, name: 'Kab. Kaur' },
    { provinsiId: 260000, id:260800, name: 'Kab. Seluma' },
    { provinsiId: 260000, id:260900, name: 'Kab. Bengkulu Tengah' },
    { provinsiId: 40000, id:40100, name: 'Kab. Bantul' },
    { provinsiId: 40000, id:40200, name: 'Kab. Sleman' },
    { provinsiId: 40000, id:40300, name: 'Kab. Gunung Kidul' },
    { provinsiId: 70000, id:72800, name: 'Kab. Nias Utara' },
    { provinsiId: 70000, id:76000, name: 'Kota Medan' },
    { provinsiId: 70000, id:76100, name: 'Kota Binjai' },
    { provinsiId: 80000, id:86500, name: 'Kota Payakumbuh' },
    { provinsiId: 80000, id:86600, name: 'Kota Pariaman' },
    { provinsiId: 90000, id:90100, name: 'Kab. Kampar' },
    { provinsiId: 180000, id:180500, name: 'Kab. Buol' },
    { provinsiId: 180000, id:180600, name: 'Kab. Tolitoli' },
    { provinsiId: 180000, id:180700, name: 'Kab. Morowali' },
    { provinsiId: 190000, id:191400, name: 'Kab. Pinrang' },
    { provinsiId: 250000, id:253400, name: 'Kab. Dogiyai' },
    { provinsiId: 250000, id:253500, name: 'Kab. Deiyai' },
    { provinsiId: 250000, id:253600, name: 'Kab. Intan Jaya' },
    { provinsiId: 250000, id:256000, name: 'Kota Jayapura' },
    { provinsiId: 260000, id:260100, name: 'Kab. Bengkulu Utara' },
    { provinsiId: 60000, id:60100, name: 'Kab. Aceh Besar' },
    { provinsiId: 60000, id:61500, name: 'Kab. Nagan Raya' },
    { provinsiId: 60000, id:61600, name: 'Kab. Aceh Jaya' },
    { provinsiId: 60000, id:61700, name: 'Kab. Aceh Barat Daya' },
    { provinsiId: 200000, id:201400, name: 'Kab. Buton Selatan' },
    { provinsiId: 200000, id:201600, name: 'Kab. Buton Tengah' },
    { provinsiId: 200000, id:206000, name: 'Kota Kendari' },
    { provinsiId: 240000, id:240700, name: 'Kab. Flores Timur' },
    { provinsiId: 240000, id:240800, name: 'Kab. Sikka' },
    { provinsiId: 70000, id:72400, name: 'Kab. Padang Lawas' },
    { provinsiId: 110000, id:110100, name: 'Kab. Musi Banyuasin' },
    { provinsiId: 30000, id:32800, name: 'Kab. Tegal' },
    { provinsiId: 30000, id:32900, name: 'Kab. Brebes' },
    { provinsiId: 50000, id:52200, name: 'Kab. Bondowoso' },
    { provinsiId: 280000, id:286200, name: 'Kota Serang' },
    { provinsiId: 280000, id:286300, name: 'Kota Tangerang Selatan' },
    { provinsiId: 290000, id:290100, name: 'Kab. Bangka' },
    { provinsiId: 290000, id:290200, name: 'Kab. Belitung' },
    { provinsiId: 290000, id:290300, name: 'Kab. Bangka Tengah' },
    { provinsiId: 240000, id:241800, name: 'Kab. Sumba Tengah' },
    { provinsiId: 240000, id:240600, name: 'Kab. Alor' },
    { provinsiId: 320000, id:321000, name: 'Kab. Maybrat' },
    { provinsiId: 320000, id:320900, name: 'Kab. Tambrauw' },
    { provinsiId: 250000, id:250700, name: 'Kab. Merauke' },
    { provinsiId: 20000, id:20700, name: 'Kab. Cianjur' },
    { provinsiId: 20000, id:20800, name: 'Kab. Bandung' },
    { provinsiId: 110000, id:116000, name: 'Kota Palembang' },
    { provinsiId: 110000, id:116100, name: 'Kota Prabumulih' },
    { provinsiId: 120000, id:121300, name: 'Kab. Pesisir Barat' },
    { provinsiId: 120000, id:126000, name: 'Kota Bandar Lampung' },
    { provinsiId: 120000, id:126100, name: 'Kota Metro' },
    { provinsiId: 130000, id:130600, name: 'Kab. Ketapang' },
    { provinsiId: 30000, id:36100, name: 'Kota Surakarta' },
    { provinsiId: 130000, id:130500, name: 'Kab. Kapuas Hulu' },
    { provinsiId: 20000, id:20600, name: 'Kab. Sukabumi' },
    { provinsiId: 100000, id:100400, name: 'Kab. Tanjung Jabung Barat' },
    { provinsiId: 100000, id:100500, name: 'Kab. Kerinci' },
    { provinsiId: 110000, id:110800, name: 'Kab. Ogan Komering Ulu Timur' },
    { provinsiId: 110000, id:110900, name: 'Kab. Ogan Komering Ulu Selatan' },
    { provinsiId: 330000, id:330500, name: 'Kab. Majene' },
    { provinsiId: 330000, id:330600, name: 'Kab. Mamuju Tengah' },
    { provinsiId: 340000, id:340100, name: 'Kab. Malinau' },
    { provinsiId: 340000, id:340200, name: 'Kab. Bulungan' },
    { provinsiId: 340000, id:340300, name: 'Kab. Tana Tidung' },
    { provinsiId: 90000, id:90900, name: 'Kab. Rokan Hulu' },
    { provinsiId: 300000, id:306000, name: 'Kota Gorontalo' },
    { provinsiId: 310000, id:310100, name: 'Kab. Bintan' },
    { provinsiId: 310000, id:310200, name: 'Kab. Karimun' },
    { provinsiId: 320000, id:320800, name: 'Kab. Raja Ampat' },
    { provinsiId: 90000, id:91400, name: 'Kab. Kuantan Singingi' },
    { provinsiId: 90000, id:91500, name: 'Kab. Kepulauan Meranti' },
    { provinsiId: 100000, id:100900, name: 'Kab. Merangin' },
    { provinsiId: 280000, id:280200, name: 'Kab. Lebak' },
    { provinsiId: 280000, id:280300, name: 'Kab. Tangerang' },
    { provinsiId: 90000, id:90200, name: 'Kab. Bengkalis' },
    { provinsiId: 90000, id:96000, name: 'Kota Pekanbaru' },
    { provinsiId: 90000, id:96200, name: 'Kota Dumai' },
    { provinsiId: 270000, id:270500, name: 'Kab. Halmahera Selatan' },
    { provinsiId: 290000, id:290400, name: 'Kab. Bangka Barat' },
    { provinsiId: 290000, id:290500, name: 'Kab. Bangka Selatan' },
    { provinsiId: 290000, id:290600, name: 'Kab. Belitung Timur' },
    { provinsiId: 290000, id:296000, name: 'Kota Pangkalpinang' },
    { provinsiId: 300000, id:300100, name: 'Kab. Boalemo' },
    { provinsiId: 240000, id:240900, name: 'Kab. Ende' },
    { provinsiId: 250000, id:251600, name: 'Kab. Yahukimo' },
    { provinsiId: 250000, id:251700, name: 'Kab. Pegunungan Bintang' },
    { provinsiId: 50000, id:52300, name: 'Kab. Situbondo' },
    { provinsiId: 60000, id:61400, name: 'Kab. Aceh Tamiang' },
    { provinsiId: 20000, id:21500, name: 'Kab. Kuningan' },
    { provinsiId: 30000, id:31600, name: 'Kab. Blora' },
    { provinsiId: 30000, id:32300, name: 'Kab. Temanggung' },
    { provinsiId: 30000, id:32400, name: 'Kab. Kendal' },
    { provinsiId: 60000, id:60300, name: 'Kab. Aceh Utara' },
    { provinsiId: 70000, id:70200, name: 'Kab. Langkat' },
    { provinsiId: 70000, id:70900, name: 'Kab. Tapanuli Tengah' },
    { provinsiId: 70000, id:71000, name: 'Kab. Tapanuli Selatan' },
    { provinsiId: 130000, id:130100, name: 'Kab. Sambas' },
    { provinsiId: 130000, id:131000, name: 'Kab. Sekadau' },
    { provinsiId: 130000, id:131100, name: 'Kab. Melawi' },
    { provinsiId: 130000, id:131200, name: 'Kab. Kayong Utara' },
    { provinsiId: 160000, id:166000, name: 'Kota Samarinda' },
    { provinsiId: 160000, id:166100, name: 'Kota Balikpapan' },
    { provinsiId: 160000, id:166300, name: 'Kota Bontang' },
    { provinsiId: 170000, id:170100, name: 'Kab. Bolaang Mongondow' },
    { provinsiId: 180000, id:180100, name: 'Kab. Banggai Kepulauan' },
    { provinsiId: 180000, id:180200, name: 'Kab. Donggala' },
    { provinsiId: 210000, id:210900, name: 'Kab. Buru Selatan' },
    { provinsiId: 240000, id:240300, name: 'Kab. Timor Tengah Selatan' },
    { provinsiId: 250000, id:253000, name: 'Kab. Lanny Jaya' },
    { provinsiId: 250000, id:253100, name: 'Kab. Membramo Tengah' },
    { provinsiId: 250000, id:253200, name: 'Kab. Yalimo' },
    { provinsiId: 260000, id:260500, name: 'Kab. Kepahiang' },
    { provinsiId: 260000, id:260600, name: 'Kab. Lebong' },
    { provinsiId: 20000, id:21100, name: 'Kab. Garut' },
    { provinsiId: 20000, id:21200, name: 'Kab. Tasikmalaya' },
    { provinsiId: 30000, id:30500, name: 'Kab. Kebumen' },
    { provinsiId: 30000, id:31100, name: 'Kab. Sukoharjo' },
    { provinsiId: 30000, id:31200, name: 'Kab. Wonogiri' },
    { provinsiId: 50000, id:52600, name: 'Kab. Pamekasan' },
    { provinsiId: 50000, id:52700, name: 'Kab. Sampang' },
    { provinsiId: 60000, id:60200, name: 'Kab. Pidie' },
    { provinsiId: 60000, id:66100, name: 'Kota Banda Aceh' },
    { provinsiId: 60000, id:66200, name: 'Kota Lhokseumawe' },
    { provinsiId: 70000, id:70500, name: 'Kab. Dairi' },
    { provinsiId: 70000, id:70600, name: 'Kab. Asahan' },
    { provinsiId: 120000, id:120800, name: 'Kab. Way Kanan' },
    { provinsiId: 120000, id:120900, name: 'Kab. Pesawaran' },
    { provinsiId: 160000, id:160200, name: 'Kab. Kutai Kartanegara' },
    { provinsiId: 160000, id:160300, name: 'Kab. Berau' },
    { provinsiId: 170000, id:170800, name: 'Kab. Bolaang Mongondow Utara' },
    { provinsiId: 170000, id:170900, name: 'Kab. Kepulauan Siau Tagulandang Biaro' },
    { provinsiId: 170000, id:171000, name: 'Kab. Minahasa Tenggara' },
    { provinsiId: 210000, id:210300, name: 'Kab. Buru' },
    { provinsiId: 210000, id:210400, name: 'Kab. Kepulauan Tanimbar' },
    { provinsiId: 210000, id:210500, name: 'Kab. Seram Bagian Barat' },
    { provinsiId: 230000, id:230500, name: 'Kab. Dompu' },
    { provinsiId: 230000, id:230600, name: 'Kab. Bima' },
    { provinsiId: 250000, id:250300, name: 'Kab. Kepulauan Yapen' },
    { provinsiId: 250000, id:251800, name: 'Kab. Tolikara' },
    { provinsiId: 30000, id:30600, name: 'Kab. Purworejo' },
    { provinsiId: 30000, id:31300, name: 'Kab. Karanganyar' },
    { provinsiId: 50000, id:51600, name: 'Kab. Tulungagung' },
    { provinsiId: 50000, id:51700, name: 'Kab. Trenggalek' },
    { provinsiId: 50000, id:51800, name: 'Kab. Malang' },
    { provinsiId: 60000, id:60800, name: 'Kab. Aceh Tenggara' },
    { provinsiId: 60000, id:66300, name: 'Kota Langsa' },
    { provinsiId: 60000, id:66400, name: 'Kota Subulussalam' },
    { provinsiId: 70000, id:70100, name: 'Kab. Deli Serdang' },
    { provinsiId: 110000, id:111000, name: 'Kab. Ogan Ilir' },
    { provinsiId: 110000, id:111100, name: 'Kab. Empat Lawang' },
    { provinsiId: 130000, id:130900, name: 'Kab. Landak' },
    { provinsiId: 140000, id:141200, name: 'Kab. Murung Raya' },
    { provinsiId: 140000, id:141300, name: 'Kab. Barito Timur' },
    { provinsiId: 140000, id:146000, name: 'Kota Palangka Raya' },
    { provinsiId: 150000, id:150100, name: 'Kab. Banjar' },
    { provinsiId: 200000, id:200500, name: 'Kab. Konawe Selatan' },
    { provinsiId: 210000, id:210600, name: 'Kab. Seram Bagian Timur' },
    { provinsiId: 240000, id:241500, name: 'Kab. Rote-Ndao' },
    { provinsiId: 240000, id:241600, name: 'Kab. Manggarai Barat' },
    { provinsiId: 250000, id:250800, name: 'Kab. Jaya Wijaya' },
    { provinsiId: 320000, id:321100, name: 'Kab. Pegunungan Arfak' },
    { provinsiId: 340000, id:340500, name: 'Kab. Nunukan' },
    { provinsiId: 20000, id:26000, name: 'Kota Bandung' },
    { provinsiId: 20000, id:26100, name: 'Kota Bogor' },
    { provinsiId: 20000, id:26200, name: 'Kota Sukabumi' },
    { provinsiId: 20000, id:26300, name: 'Kota Cirebon' },
    { provinsiId: 20000, id:26500, name: 'Kota Bekasi' },
    { provinsiId: 20000, id:26600, name: 'Kota Depok' },
    { provinsiId: 30000, id:30700, name: 'Kab. Wonosobo' },
    { provinsiId: 30000, id:30800, name: 'Kab. Magelang' },
    { provinsiId: 50000, id:51100, name: 'Kab. Ponorogo' },
    { provinsiId: 60000, id:60400, name: 'Kab. Aceh Timur' },
    { provinsiId: 60000, id:61100, name: 'Kab. Simeulue' },
    { provinsiId: 100000, id:106000, name: 'Kota Jambi' },
    { provinsiId: 100000, id:106100, name: 'Kota Sungai Penuh' },
    { provinsiId: 130000, id:130200, name: 'Kab. Mempawah' },
    { provinsiId: 130000, id:130300, name: 'Kab. Sanggau' },
    { provinsiId: 130000, id:130400, name: 'Kab. Sintang' },
    { provinsiId: 190000, id:190200, name: 'Kab. Pangkajene Kepulauan' },
    { provinsiId: 190000, id:190300, name: 'Kab. Gowa' },
    { provinsiId: 190000, id:190400, name: 'Kab. Takalar' },
    { provinsiId: 220000, id:220300, name: 'Kab. Tabanan' },
    { provinsiId: 240000, id:240500, name: 'Kab. Belu' },
    { provinsiId: 280000, id:280400, name: 'Kab. Serang' },
    { provinsiId: 320000, id:320100, name: 'Kab. Fak-Fak' },
    { provinsiId: 320000, id:320200, name: 'Kab. Kaimana' },
    { provinsiId: 20000, id:21800, name: 'Kab. Indramayu' },
    { provinsiId: 20000, id:21900, name: 'Kab. Subang' },
    { provinsiId: 30000, id:30300, name: 'Kab. Purbalingga' },
    { provinsiId: 30000, id:30400, name: 'Kab. Banjarnegara' },
    { provinsiId: 50000, id:52400, name: 'Kab. Jember' },
    { provinsiId: 60000, id:60500, name: 'Kab. Aceh Tengah' },
    { provinsiId: 60000, id:61800, name: 'Kab. Gayo Lues' },
    { provinsiId: 100000, id:100100, name: 'Kab. Batang Hari' },
    { provinsiId: 110000, id:110500, name: 'Kab. Lahat' },
    { provinsiId: 140000, id:140500, name: 'Kab. Kotawaringin Barat' },
    { provinsiId: 140000, id:140600, name: 'Kab. Katingan' },
    { provinsiId: 190000, id:191500, name: 'Kab. Sidenreng Rappang' },
    { provinsiId: 190000, id:191600, name: 'Kab. Enrekang' },
    { provinsiId: 190000, id:191700, name: 'Kab. Luwu' },
    { provinsiId: 200000, id:200100, name: 'Kab. Konawe' },
    { provinsiId: 230000, id:230300, name: 'Kab. Lombok Timur' },
    { provinsiId: 230000, id:230400, name: 'Kab. Sumbawa' },
    { provinsiId: 320000, id:320500, name: 'Kab. Manokwari' },
    { provinsiId: 320000, id:320600, name: 'Kab. Sorong Selatan' },
    { provinsiId: 20000, id:21700, name: 'Kab. Cirebon' },
    { provinsiId: 30000, id:30900, name: 'Kab. Boyolali' },
    { provinsiId: 30000, id:31000, name: 'Kab. Klaten' },
    { provinsiId: 70000, id:71100, name: 'Kab. Nias' },
    { provinsiId: 70000, id:71500, name: 'Kab. Mandailing Natal' },
    { provinsiId: 120000, id:120600, name: 'Kab. Tanggamus' },
    { provinsiId: 140000, id:140200, name: 'Kab. Barito Selatan' },
    { provinsiId: 140000, id:140300, name: 'Kab. Barito Utara' },
    { provinsiId: 140000, id:140400, name: 'Kab. Kotawaringin Timur' },
    { provinsiId: 260000, id:266000, name: 'Kota Bengkulu' },
    { provinsiId: 270000, id:270100, name: 'Kab. Pulau Taliabu' },
    { provinsiId: 270000, id:270200, name: 'Kab. Halmahera Tengah' },
    { provinsiId: 30000, id:30100, name: 'Kab. Cilacap' },
    { provinsiId: 30000, id:32600, name: 'Kab. Pekalongan' },
    { provinsiId: 120000, id:120200, name: 'Kab. Lampung Tengah' },
    { provinsiId: 120000, id:120300, name: 'Kab. Lampung Utara' },
    { provinsiId: 150000, id:150600, name: 'Kab. Hulu Sungai Tengah' },
    { provinsiId: 220000, id:220500, name: 'Kab. Gianyar' },
    { provinsiId: 220000, id:220600, name: 'Kab. Klungkung' },
    { provinsiId: 220000, id:220700, name: 'Kab. Bangli' },
    { provinsiId: 220000, id:220800, name: 'Kab. Karang Asem' },
    { provinsiId: 250000, id:251400, name: 'Kab. Mappi' },
    { provinsiId: 150000, id:150900, name: 'Kab. Kotabaru' },
    { provinsiId: 150000, id:151000, name: 'Kab. Balangan' },
    { provinsiId: 190000, id:190700, name: 'Kab. Bone' },
    { provinsiId: 70000, id:71700, name: 'Kab. Nias Selatan' },
    { provinsiId: 170000, id:170300, name: 'Kab. Kep. Sangihe' },
    { provinsiId: 120000, id:120700, name: 'Kab. Lampung Timur' },
    { provinsiId: 40000, id:46000, name: 'Kota Yogyakarta' },
    { provinsiId: 110000, id:110200, name: 'Kab. Ogan Komering Ilir' },
    { provinsiId: 110000, id:110400, name: 'Kab. Muara Enim' },
    { provinsiId: 20000, id:22200, name: 'Kab. Bekasi' },
    { provinsiId: 20000, id:22300, name: 'Kab. Bandung Barat' },
    { provinsiId: 20000, id:22500, name: 'Kab. Pangandaran' },
    { provinsiId: 50000, id:50300, name: 'Kab. Mojokerto' },
    { provinsiId: 70000, id:71900, name: 'Kab. Humbang Hasudutan' },
    { provinsiId: 70000, id:72000, name: 'Kab. Samosir' },
    { provinsiId: 130000, id:131300, name: 'Kab. Kuburaya' },
    { provinsiId: 130000, id:136000, name: 'Kota Pontianak' },
    { provinsiId: 150000, id:150200, name: 'Kab. Tanah Laut' },
    { provinsiId: 180000, id:181100, name: 'Kab. Banggai Laut' },
    { provinsiId: 180000, id:181200, name: 'Kab. Morowali Utara' },
    { provinsiId: 240000, id:240400, name: 'Kab. Timor Tengah Utara' },
    { provinsiId: 240000, id:241700, name: 'Kab. Nagakeo' },
    { provinsiId: 20000, id:22000, name: 'Kab. Purwakarta' },
    { provinsiId: 30000, id:31900, name: 'Kab. Kudus' },
    { provinsiId: 30000, id:32000, name: 'Kab. Jepara' },
    { provinsiId: 30000, id:32100, name: 'Kab. Demak' },
    { provinsiId: 60000, id:60600, name: 'Kab. Aceh Barat' },
    { provinsiId: 70000, id:71600, name: 'Kab. Toba Samosir' },
    { provinsiId: 120000, id:121000, name: 'Kab. Pringsewu' },
    { provinsiId: 170000, id:171100, name: 'Kab. Bolaang Mongondow Timur' },
    { provinsiId: 170000, id:171200, name: 'Kab. Bolaang Mongondow Selatan' },
    { provinsiId: 230000, id:230700, name: 'Kab. Sumbawa Barat' },
    { provinsiId: 230000, id:230800, name: 'Kab. Lombok Utara' },
    { provinsiId: 230000, id:236000, name: 'Kota Mataram' },
    { provinsiId: 230000, id:236100, name: 'Kota Bima' },
    { provinsiId: 240000, id:241000, name: 'Kab. Ngada' },
    { provinsiId: 240000, id:241100, name: 'Kab. Manggarai' },
    { provinsiId: 250000, id:251900, name: 'Kab. Sarmi' },
    { provinsiId: 250000, id:252000, name: 'Kab. Keerom' },
    { provinsiId: 20000, id:21400, name: 'Kab. Ciamis' },
    { provinsiId: 20000, id:22100, name: 'Kab. Karawang' },
    { provinsiId: 30000, id:31400, name: 'Kab. Sragen' },
    { provinsiId: 30000, id:31500, name: 'Kab. Grobogan' },
    { provinsiId: 50000, id:52800, name: 'Kab. Sumenep' },
    { provinsiId: 70000, id:70700, name: 'Kab. Labuhan Batu' },
    { provinsiId: 70000, id:70800, name: 'Kab. Tapanuli Utara' },
    { provinsiId: 120000, id:121100, name: 'Kab. Mesuji' },
    { provinsiId: 120000, id:121200, name: 'Kab. Tulang Bawang Barat' },
    { provinsiId: 160000, id:160900, name: 'Kab. Kutai Barat' },
    { provinsiId: 240000, id:240100, name: 'Kab. Kupang' },
    { provinsiId: 250000, id:250900, name: 'Kab. Nabire' },
    { provinsiId: 250000, id:252600, name: 'Kab. Waropen' },
    { provinsiId: 250000, id:252700, name: 'Kab. Supiori' },
    { provinsiId: 340000, id:346000, name: 'Kota Tarakan' },
    { provinsiId: 350000, id:350100, name: 'Belanda' },
    { provinsiId: 350000, id:350200, name: 'Japan' },
    { provinsiId: 30000, id:31700, name: 'Kab. Rembang' },
    { provinsiId: 50000, id:52000, name: 'Kab. Probolinggo' },
    { provinsiId: 50000, id:56100, name: 'Kota Malang' },
    { provinsiId: 60000, id:61200, name: 'Kab. Bireuen' },
    { provinsiId: 70000, id:70300, name: 'Kab. Karo' },
    { provinsiId: 110000, id:110600, name: 'Kab. Musi Rawas' },
    { provinsiId: 110000, id:110700, name: 'Kab. Banyuasin' },
    { provinsiId: 130000, id:136100, name: 'Kota Singkawang' },
    { provinsiId: 140000, id:140100, name: 'Kab. Kapuas' },
    { provinsiId: 190000, id:190500, name: 'Kab. Jeneponto' },
    { provinsiId: 240000, id:241900, name: 'Kab. Sumba Barat Daya' },
    { provinsiId: 240000, id:242000, name: 'Kab. Manggarai Timur' },
    { provinsiId: 240000, id:242100, name: 'Kab. Sabu Raijua' },
    { provinsiId: 240000, id:242200, name: 'Kab. Malaka' },
    { provinsiId: 320000, id:320300, name: 'Kab. Teluk Wondama' },
    { provinsiId: 320000, id:320400, name: 'Kab. Teluk Bintuni' },
    { provinsiId: 20000, id:21000, name: 'Kab. Sumedang' },
    { provinsiId: 50000, id:52500, name: 'Kab. Banyuwangi' },
    { provinsiId: 60000, id:61900, name: 'Kab. Bener Meriah' },
    { provinsiId: 70000, id:70400, name: 'Kab. Simalungun' },
    { provinsiId: 140000, id:140700, name: 'Kab. Seruyan' },
    { provinsiId: 140000, id:140800, name: 'Kab. Sukamara' },
    { provinsiId: 200000, id:200200, name: 'Kab. Muna' },
    { provinsiId: 330000, id:330300, name: 'Kab. Polewali Mandar' },
    { provinsiId: 330000, id:330400, name: 'Kab. Mamasa' },
    { provinsiId: 30000, id:36000, name: 'Kota Magelang' },
    { provinsiId: 30000, id:36200, name: 'Kota Salatiga' },
    { provinsiId: 30000, id:36300, name: 'Kota Semarang' },
    { provinsiId: 80000, id:81200, name: 'Kab. Dharmasraya' },
    { provinsiId: 80000, id:81300, name: 'Kab. Pasaman Barat' },
    { provinsiId: 80000, id:86000, name: 'Kota Bukittinggi' },
    { provinsiId: 80000, id:86100, name: 'Kota Padang' },
    { provinsiId: 80000, id:86200, name: 'Kota Padang Panjang' },
    { provinsiId: 80000, id:86300, name: 'Kota Sawah Lunto' },
    { provinsiId: 170000, id:170400, name: 'Kab. Kepulauan Talaud' },
    { provinsiId: 270000, id:270300, name: 'Kab. Halmahera Barat' },
    { provinsiId: 30000, id:32700, name: 'Kab. Pemalang' },
    { provinsiId: 50000, id:52100, name: 'Kab. Lumajang' },
    { provinsiId: 150000, id:150700, name: 'Kab. Hulu Sungai Utara' },
    { provinsiId: 150000, id:150800, name: 'Kab. Tabalong' },
    { provinsiId: 190000, id:190600, name: 'Kab. Barru' },
    { provinsiId: 250000, id:251500, name: 'Kab. Asmat' },
    { provinsiId: 70000, id:72500, name: 'Kab. Labuhan Batu Utara' },
    { provinsiId: 70000, id:72600, name: 'Kab. Labuhan Batu Selatan' },
    { provinsiId: 70000, id:72700, name: 'Kab. Nias Barat' },
    { provinsiId: 190000, id:190800, name: 'Kab. Wajo' },
    { provinsiId: 190000, id:190900, name: 'Kab. Soppeng' },
    { provinsiId: 190000, id:191000, name: 'Kab. Bantaeng' },
    { provinsiId: 220000, id:226000, name: 'Kota Denpasar' },
    { provinsiId: 230000, id:230100, name: 'Kab. Lombok Barat' },
    { provinsiId: 150000, id:150300, name: 'Kab. Barito Kuala' },
    { provinsiId: 160000, id:161000, name: 'Kab. Kutai Timur' },
    { provinsiId: 160000, id:161100, name: 'Kab. Penajam Paser Utara' },
    { provinsiId: 160000, id:161200, name: 'Kab. Mahakam Ulu' },
    { provinsiId: 250000, id:251000, name: 'Kab. Paniai' },
    { provinsiId: 60000, id:62000, name: 'Kab. Pidie Jaya' },
    { provinsiId: 60000, id:66000, name: 'Kota Sabang' },
    { provinsiId: 140000, id:140900, name: 'Kab. Lamandau' },
    { provinsiId: 140000, id:141000, name: 'Kab. Gunung Mas' },
    { provinsiId: 240000, id:241200, name: 'Kab. Sumba Timur' },
    { provinsiId: 240000, id:241300, name: 'Kab. Sumba Barat' },
    { provinsiId: 250000, id:250200, name: 'Kab. Biak Numfor' },
    { provinsiId: 130000, id:130800, name: 'Kab. Bengkayang' },
    { provinsiId: 240000, id:241400, name: 'Kab. Lembata' },
    { provinsiId: 20000, id:21600, name: 'Kab. Majalengka' },
    { provinsiId: 50000, id:56200, name: 'Kota Madiun' },
    { provinsiId: 50000, id:56300, name: 'Kota Kediri' },
    { provinsiId: 50000, id:56400, name: 'Kota Mojokerto' },
    { provinsiId: 50000, id:56500, name: 'Kota Blitar' },
    { provinsiId: 50000, id:56600, name: 'Kota Pasuruan' },
    { provinsiId: 50000, id:56700, name: 'Kota Probolinggo' },
    { provinsiId: 50000, id:56800, name: 'Kota Batu' },
    { provinsiId: 110000, id:116200, name: 'Kota Lubuk Linggau' },
    { provinsiId: 110000, id:116300, name: 'Kota Pagar Alam' },
    { provinsiId: 120000, id:120100, name: 'Kab. Lampung Selatan' },
    { provinsiId: 200000, id:200900, name: 'Kab. Konawe Utara' },
    { provinsiId: 200000, id:201000, name: 'Kab. Buton Utara' },
    { provinsiId: 200000, id:201100, name: 'Kab. Kolaka Timur' },
    { provinsiId: 200000, id:206100, name: 'Kota Baubau' },
    { provinsiId: 210000, id:210100, name: 'Kab. Maluku Tengah' },
    { provinsiId: 80000, id:86400, name: 'Kota Solok' },
    { provinsiId: 20000, id:26700, name: 'Kota Cimahi' },
    { provinsiId: 20000, id:26800, name: 'Kota Tasikmalaya' },
    { provinsiId: 20000, id:26900, name: 'Kota Banjar' },
    { provinsiId: 220000, id:220400, name: 'Kab. Badung' },
    { provinsiId: 110000, id:110300, name: 'Kab. Ogan Komering Ulu' },
    { provinsiId: 110000, id:111200, name: 'Kab. Penukal Abab Lematang Ilir' },
    { provinsiId: 110000, id:111300, name: 'Kab. Musi Rawas Utara' },
    { provinsiId: 250000, id:251100, name: 'Kab. Puncak Jaya' },
    { provinsiId: 250000, id:252900, name: 'Kab. Nduga' },
    { provinsiId: 140000, id:141100, name: 'Kab. Pulang Pisau' },
    { provinsiId: 160000, id:160100, name: 'Kab. Paser' },
    { provinsiId: 60000, id:60700, name: 'Kab. Aceh Selatan' },
    { provinsiId: 190000, id:192700, name: 'Kab. Toraja Utara' },
    { provinsiId: 80000, id:80800, name: 'Kab. Sijunjung' },
    { provinsiId: 80000, id:81000, name: 'Kab. Kepulauan Mentawai' },
    { provinsiId: 80000, id:81100, name: 'Kab. Solok Selatan' },
    { provinsiId: 210000, id:216000, name: 'Kota Ambon' },
    { provinsiId: 210000, id:216100, name: 'Kota Tual' },
    { provinsiId: 220000, id:220100, name: 'Kab. Buleleng' },
    { provinsiId: 220000, id:220200, name: 'Kab. Jembrana' },
    { provinsiId: 50000, id:50600, name: 'Kab. Tuban' },
    { provinsiId: 50000, id:51300, name: 'Kab. Kediri' },
    { provinsiId: 270000, id:270400, name: 'Kab. halmahera Utara' },
    { provinsiId: 120000, id:120400, name: 'Kab. Lampung Barat' },
    { provinsiId: 120000, id:120500, name: 'Kab. Tulang Bawang' },
    { provinsiId: 50000, id:50900, name: 'Kab. Ngawi' },
    { provinsiId: 80000, id:80500, name: 'Kab. Padang Pariaman' },
    { provinsiId: 80000, id:80600, name: 'Kab. Pesisir Selatan' },
    { provinsiId: 180000, id:186000, name: 'Kota Palu' },
    { provinsiId: 190000, id:190100, name: 'Kab. Maros' },
    { provinsiId: 190000, id:196000, name: 'Kota Makassar' },
    { provinsiId: 310000, id:310300, name: 'Kab. Natuna' },
    { provinsiId: 310000, id:310400, name: 'Kab. Lingga' },
    { provinsiId: 40000, id:40400, name: 'Kab. Kulon Progo' },
    { provinsiId: 50000, id:50100, name: 'Kab. Gresik' },
    { provinsiId: 70000, id:76200, name: 'Kota Tebing Tinggi' },
    { provinsiId: 70000, id:76300, name: 'Kota Pematangsiantar' },
    { provinsiId: 70000, id:76400, name: 'Kota Tanjung Balai' },
    { provinsiId: 70000, id:76500, name: 'Kota Sibolga' },
    { provinsiId: 70000, id:76600, name: 'Kota Padang Sidimpuan' },
    { provinsiId: 180000, id:180800, name: 'Kab. Parigi Moutong' },
    { provinsiId: 260000, id:260200, name: 'Kab. Rejang Lebong' },
    { provinsiId: 260000, id:260300, name: 'Kab. Bengkulu Selatan' },
    { provinsiId: 30000, id:32200, name: 'Kab. Semarang' },
    { provinsiId: 70000, id:71800, name: 'Kab. Pakpak Bharat' },
    { provinsiId: 170000, id:176000, name: 'Kota Manado' },
    { provinsiId: 170000, id:176100, name: 'Kota Bitung' },
    { provinsiId: 170000, id:176200, name: 'Kota Tomohon' },
    { provinsiId: 250000, id:252800, name: 'Kab. Memberamo Raya' },
    { provinsiId: 260000, id:260400, name: 'Kab. Muko-muko' },
    { provinsiId: 30000, id:31800, name: 'Kab. Pati' },
    { provinsiId: 150000, id:150400, name: 'Kab. Tapin' },
    { provinsiId: 150000, id:150500, name: 'Kab. Hulu Sungai Selatan' },
    { provinsiId: 250000, id:251200, name: 'Kab. Mimika' },
    { provinsiId: 250000, id:251300, name: 'Kab. Boven Digoel' },
    { provinsiId: 150000, id:151100, name: 'Kab. Tanah Bumbu' },
    { provinsiId: 150000, id:156000, name: 'Kota Banjarmasin' },
    { provinsiId: 150000, id:156100, name: 'Kota Banjarbaru' },
    { provinsiId: 170000, id:170500, name: 'Kab. Minahasa Selatan' },
    { provinsiId: 240000, id:246000, name: 'Kota Kupang' },
    { provinsiId: 250000, id:250100, name: 'Kab. Jayapura' },
    { provinsiId: 50000, id:51200, name: 'Kab. Pacitan' },
    { provinsiId: 190000, id:191100, name: 'Kab. Bulukumba' },
    { provinsiId: 190000, id:191200, name: 'Kab. Sinjai' },
    { provinsiId: 280000, id:286000, name: 'Kota Cilegon' },
    { provinsiId: 280000, id:286100, name: 'Kota Tangerang' },
    { provinsiId: 30000, id:30200, name: 'Kab. Banyumas' },
    { provinsiId: 230000, id:230200, name: 'Kab. Lombok Tengah' },
    { provinsiId: 190000, id:196100, name: 'Kota Parepare' },
    { provinsiId: 190000, id:196200, name: 'Kota Palopo' },
    { provinsiId: 200000, id:200600, name: 'Kab. Wakatobi' },
    { provinsiId: 310000, id:310500, name: 'Kab. Kepulauan Anambas' },
    { provinsiId: 310000, id:316000, name: 'Kota Batam' },
    { provinsiId: 310000, id:316100, name: 'Kota Tanjungpinang' },
    { provinsiId: 320000, id:321200, name: 'Kab. Manokwari Selatan' },
    { provinsiId: 70000, id:76700, name: 'Kota Gunungsitoli' },
    { provinsiId: 80000, id:80100, name: 'Kab. Agam' },
    { provinsiId: 190000, id:191800, name: 'Kab. Tana Toraja' },
    { provinsiId: 270000, id:270600, name: 'Kab. Halmahera Timur' },
    { provinsiId: 270000, id:270700, name: 'Kab. Kepulauan Sula' },
    { provinsiId: 270000, id:270800, name: 'Kab. Kepulauan Morotai' },
    { provinsiId: 80000, id:80200, name: 'Kab. Pasaman' },
    { provinsiId: 80000, id:80300, name: 'Kab. Lima Puluh Koto' },
    { provinsiId: 170000, id:176300, name: 'Kota Kotamobagu' },
    { provinsiId: 180000, id:180900, name: 'Kab. Tojo Una-Una' },
    { provinsiId: 270000, id:276000, name: 'Kota Ternate' },
    { provinsiId: 30000, id:32500, name: 'Kab. Batang' },
    { provinsiId: 30000, id:36400, name: 'Kota Pekalongan' },
    { provinsiId: 30000, id:36500, name: 'Kota Tegal' },
    { provinsiId: 170000, id:170600, name: 'Kab. Minahasa Utara' },
    { provinsiId: 190000, id:191300, name: 'Kab. Kepulauan Selayar' },
    { provinsiId: 200000, id:201200, name: 'Kab. Konawe Kepulauan' },
    { provinsiId: 200000, id:201300, name: 'Kab. Muna Barat' },
    { provinsiId: 60000, id:61300, name: 'Kab. Aceh Singkil' },
    // Tambahkan data kota/kabupaten sesuai format
  ];

  const provinsiDropdown = document.getElementById('provinsiDropdown');
  const kotaDropdown = document.getElementById('kotaDropdown');

  // Function untuk mengisi dropdown Provinsi
  function populateProvinsiDropdown() {
    provinsiData.forEach(provinsi => {
      const option = document.createElement('option');
      option.value = provinsi.id;
      option.textContent = provinsi.name;
      provinsiDropdown.appendChild(option);
    });
  }

  // Function untuk mengisi dropdown Kota/Kabupaten berdasarkan Provinsi yang dipilih
  function populateKotaDropdown(selectedProvinsiId) {
    // Menghapus opsi sebelumnya di dropdown Kota/Kabupaten
    kotaDropdown.innerHTML = '<option selected disabled>Pilih Kota/Kabupaten...</option>';

    // Mencari data Kota/Kabupaten berdasarkan Provinsi yang dipilih
    const filteredKota = kotaData.filter(kota => kota.provinsiId === selectedProvinsiId);

    // Mengisi dropdown Kota/Kabupaten sesuai Provinsi yang dipilih
    filteredKota.forEach(kota => {
      const option = document.createElement('option');
      option.value = kota.id;
      option.textContent = kota.name;
      kotaDropdown.appendChild(option);
    });
  }

  // Function yang dipanggil saat dropdown Provinsi berubah
  function changeKota() {
    const selectedProvinsiId = parseInt(provinsiDropdown.value);
    if (!isNaN(selectedProvinsiId)) {
      populateKotaDropdown(selectedProvinsiId);
    }
  }

  // Memanggil function untuk mengisi dropdown Provinsi saat halaman dimuat
  populateProvinsiDropdown();
</script>
<!-- Script Lainnya, Isi sendiri -->
<script>
    // Mendapatkan elemen input radio
    const lainnyaIsiSendiri = document.getElementById('lainnyaIsiSendiri');
    const customInput = document.getElementById('customInput');

    // Menambahkan event listener untuk perubahan pada input radio
    lainnyaIsiSendiri.addEventListener('change', function() {
        // Jika "Lainnya, isi sendiri" dipilih, tampilkan input tambahan
        if (lainnyaIsiSendiri.checked) {
            customInput.style.display = 'block';
        } else {
            // Jika bukan, sembunyikan input tambahan
            customInput.style.display = 'none';
        }
    });
</script>
<!-- Script Lainnya, Isi sendiri -->
@endsection
