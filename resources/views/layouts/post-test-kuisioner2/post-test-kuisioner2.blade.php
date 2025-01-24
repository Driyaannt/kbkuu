@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="card mt-4">
  <div class="card-header bg-primary">
    <h4 class="mb-0 text-white">(POST TEST) KUESIONER TENTANG KELUARGA BERENCANA (KB)</h4>
  </div>
  <form id="kuisionerForm">
    @csrf
    <div class="card-body">
      <h5 class="mb-3">Petunjuk Pengisian Kuesioner:</h5>
      <p>
        1. Teliti dengan baik pertanyaan pada item di bawah ini.<br />
        2. Pilih jawaban yang menurut Anda sesuai dengan memberikan tanda centang (✓) pada kotak yang tersedia.<br />
        3. Isi titik-titik dengan jawaban yang benar.
      </p>

      <hr />
      <h5>A. Data Demografi</h5>
      <div class="row pt-3">
        <div class="col-md-6">
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Anda" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label>Usia</label>
            <input type="number" class="form-control" name="usia" placeholder="Tahun" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label>Jenis Kelamin</label>
            {{-- <div class="form-check">
              <input type="radio" name="jenis_kelamin" id="male" value="Laki-laki" class="form-check-input" />
              <label for="male" class="form-check-label">Laki-laki</label>
            </div> --}}
            <div class="form-check">
              <input type="radio" name="jenis_kelamin" id="female" value="Perempuan" class="form-check-input" />
              <label for="female" class="form-check-label">Perempuan</label>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label>Pendidikan</label>
            <select class="form-control" name="pendidikan">
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="Perguruan Tinggi">Perguruan Tinggi</option>
              <option value="Lain-lain">Lain-lain</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label>Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan Anda" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label>Jumlah Anak</label>
            <input type="number" class="form-control" name="jumlah_anak" placeholder="Jumlah anak" />
          </div>
        </div>
      </div>

      <hr />
      <h5>B. Pengetahuan Tentang KB</h5>
        <div class="mb-3">
        <label>1. Program Keluarga Berencana (KB) adalah program yang bertujuan untuk mengatur jumlah dan jarak kelahiran anak.</label>
        <div class="form-check">
            <input type="radio" name="kb1" id="kb1-true" value="Benar" class="form-check-input" />
            <label for="kb1-true" class="form-check-label">Benar</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kb1" id="kb1-false" value="Salah" class="form-check-input" />
            <label for="kb1-false" class="form-check-label">Salah</label>
        </div>
        </div>
        <div class="mb-3">
        <label>2. Tujuan utama program KB adalah untuk meningkatkan kesejahteraan keluarga dan kesehatan ibu serta anak.</label>
        <div class="form-check">
            <input type="radio" name="kb2" id="kb2-true" value="Benar" class="form-check-input" />
            <label for="kb2-true" class="form-check-label">Benar</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kb2" id="kb2-false" value="Salah" class="form-check-input" />
            <label for="kb2-false" class="form-check-label">Salah</label>
        </div>
        </div>
        <div class="mb-3">
        <label>3. Metode kontrasepsi hormonal meliputi pil, suntik, dan implant.</label>
        <div class="form-check">
            <input type="radio" name="kb3" id="kb3-true" value="Benar" class="form-check-input" />
            <label for="kb3-true" class="form-check-label">Benar</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kb3" id="kb3-false" value="Salah" class="form-check-input" />
            <label for="kb3-false" class="form-check-label">Salah</label>
        </div>
        </div>
        <div class="mb-3">
        <label>4. Metode kontrasepsi non-hormonal termasuk IUD, kondom, dan sterilisasi.</label>
        <div class="form-check">
            <input type="radio" name="kb4" id="kb4-true" value="Benar" class="form-check-input" />
            <label for="kb4-true" class="form-check-label">Benar</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kb4" id="kb4-false" value="Salah" class="form-check-input" />
            <label for="kb4-false" class="form-check-label">Salah</label>
        </div>
        </div>
        <div class="mb-3">
        <label>5. Manfaat KB termasuk mengurangi risiko kesehatan bagi ibu dan meningkatkan kesehatan anak.</label>
        <div class="form-check">
            <input type="radio" name="kb5" id="kb5-true" value="Benar" class="form-check-input" />
            <label for="kb5-true" class="form-check-label">Benar</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kb5" id="kb5-false" value="Salah" class="form-check-input" />
            <label for="kb5-false" class="form-check-label">Salah</label>
        </div>
        </div>
        <div class="mb-3">
        <label>6. Tidak ada risiko kesehatan yang terkait dengan penggunaan metode KB tertentu.</label>
        <div class="form-check">
            <input type="radio" name="kb6" id="kb6-true" value="Benar" class="form-check-input" />
            <label for="kb6-true" class="form-check-label">Benar</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kb6" id="kb6-false" value="Salah" class="form-check-input" />
            <label for="kb6-false" class="form-check-label">Salah</label>
        </div>
        </div>
        <div class="mb-3">
        <label>7. Layanan KB dapat diakses di fasilitas kesehatan seperti puskesmas atau klinik di daerah Anda.</label>
        <div class="form-check">
            <input type="radio" name="kb7" id="kb7-true" value="Benar" class="form-check-input" />
            <label for="kb7-true" class="form-check-label">Benar</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kb7" id="kb7-false" value="Salah" class="form-check-input" />
            <label for="kb7-false" class="form-check-label">Salah</label>
        </div>
        </div>

      <hr />
      <h5>C. Sikap Terhadap KB</h5>
      <p><strong>Keterangan:</strong></p>
      <ul>
        <li><strong>SS:</strong> Sangat setuju</li>
        <li><strong>S:</strong> Setuju</li>
        <li><strong>E:</strong> Tidak dapat menentukan (ragu-ragu)</li>
        <li><strong>TS:</strong> Tidak setuju</li>
        <li><strong>STS:</strong> Sangat tidak setuju</li>
        <li><strong>Scroll Samping jika tidak terlihat untuk stssnya</strong></li>

      </ul>
        <div style="overflow-x: auto; max-width: 100%;">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>SS</th>
                    <th>S</th>
                    <th>E</th>
                    <th>TS</th>
                    <th>STS</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Saya percaya bahwa KB penting untuk mengatur jarak kelahiran.</td>
                    <td><input type="radio" name="q1" id="q1-ss" value="SS" class="form-check-input" /></td>
                    <td><input type="radio" name="q1" id="q1-s" value="S" class="form-check-input" /></td>
                    <td><input type="radio" name="q1" id="q1-e" value="E" class="form-check-input" /></td>
                    <td><input type="radio" name="q1" id="q1-ts" value="TS" class="form-check-input" /></td>
                    <td><input type="radio" name="q1" id="q1-sts" value="STS" class="form-check-input" /></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Saya percaya bahwa KB dapat membantu meningkatkan kesejahteraan keluarga.</td>
                    <td><input type="radio" name="q2" id="q2-ss" value="SS" class="form-check-input" /></td>
                    <td><input type="radio" name="q2" id="q2-s" value="S" class="form-check-input" /></td>
                    <td><input type="radio" name="q2" id="q2-e" value="E" class="form-check-input" /></td>
                    <td><input type="radio" name="q2" id="q2-ts" value="TS" class="form-check-input" /></td>
                    <td><input type="radio" name="q2" id="q2-sts" value="STS" class="form-check-input" /></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Saya tidak setuju jika memutuskan metode KB dengan pasangan saya.</td>
                    <td><input type="radio" name="q3" id="q3-ss" value="SS" class="form-check-input" /></td>
                    <td><input type="radio" name="q3" id="q3-s" value="S" class="form-check-input" /></td>
                    <td><input type="radio" name="q3" id="q3-e" value="E" class="form-check-input" /></td>
                    <td><input type="radio" name="q3" id="q3-ts" value="TS" class="form-check-input" /></td>
                    <td><input type="radio" name="q3" id="q3-sts" value="STS" class="form-check-input" /></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Saya tidak merasa terganggu oleh penggunaan alat kontrasepsi.</td>
                    <td><input type="radio" name="q4" id="q4-ss" value="SS" class="form-check-input" /></td>
                    <td><input type="radio" name="q4" id="q4-s" value="S" class="form-check-input" /></td>
                    <td><input type="radio" name="q4" id="q4-e" value="E" class="form-check-input" /></td>
                    <td><input type="radio" name="q4" id="q4-ts" value="TS" class="form-check-input" /></td>
                    <td><input type="radio" name="q4" id="q4-sts" value="STS" class="form-check-input" /></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Saya merasa metode KB dapat memberikan efek samping yang berbahaya.</td>
                    <td><input type="radio" name="q5" id="q5-ss" value="SS" class="form-check-input" /></td>
                    <td><input type="radio" name="q5" id="q5-s" value="S" class="form-check-input" /></td>
                    <td><input type="radio" name="q5" id="q5-e" value="E" class="form-check-input" /></td>
                    <td><input type="radio" name="q5" id="q5-ts" value="TS" class="form-check-input" /></td>
                    <td><input type="radio" name="q5" id="q5-sts" value="STS" class="form-check-input" /></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Saya tidak merasa nyaman berbicara tentang KB dengan pasangan saya.</td>
                    <td><input type="radio" name="q6" id="q6-ss" value="SS" class="form-check-input" /></td>
                    <td><input type="radio" name="q6" id="q6-s" value="S" class="form-check-input" /></td>
                    <td><input type="radio" name="q6" id="q6-e" value="E" class="form-check-input" /></td>
                    <td><input type="radio" name="q6" id="q6-ts" value="TS" class="form-check-input" /></td>
                    <td><input type="radio" name="q6" id="q6-sts" value="STS" class="form-check-input" /></td>
                </tr>
                </tbody>
            </table>
        </div>

    <hr />
    <h5>D. Tindakan Terkait KB</h5>
    <div class="mb-3">
        <label for="action1">1. Apakah Anda mencari informasi tentang berbagai metode kontrasepsi sebelum membuat keputusan?</label>
        <div class="form-check">
            <input type="radio" name="action1" id="action1-done" value="Dilakukan" class="form-check-input" />
            <label for="action1-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action1" id="action1-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action1-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action2">2. Apakah Anda berkonsultasi dengan tenaga medis untuk mendapatkan rekomendasi metode kontrasepsi yang sesuai?</label>
        <div class="form-check">
            <input type="radio" name="action2" id="action2-done" value="Dilakukan" class="form-check-input" />
            <label for="action2-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action2" id="action2-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action2-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action3">3. Apakah Anda mempertimbangkan kenyamanan pribadi dalam memilih metode kontrasepsi?</label>
        <div class="form-check">
            <input type="radio" name="action3" id="action3-done" value="Dilakukan" class="form-check-input" />
            <label for="action3-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action3" id="action3-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action3-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action4">4. Apakah Anda mendiskusikan keputusan pemilihan kontrasepsi dengan pasangan Anda?</label>
        <div class="form-check">
            <input type="radio" name="action4" id="action4-done" value="Dilakukan" class="form-check-input" />
            <label for="action4-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action4" id="action4-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action4-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action5">5. Apakah Anda mempertimbangkan biaya metode kontrasepsi sebelum membuat keputusan?</label>
        <div class="form-check">
            <input type="radio" name="action5" id="action5-done" value="Dilakukan" class="form-check-input" />
            <label for="action5-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action5" id="action5-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action5-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action6">6. Apakah Anda mempertimbangkan durasi efektivitas metode kontrasepsi (jangka pendek atau jangka panjang) saat memilih?</label>
        <div class="form-check">
            <input type="radio" name="action6" id="action6-done" value="Dilakukan" class="form-check-input" />
            <label for="action6-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action6" id="action6-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action6-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action7">7. Apakah Anda mempertimbangkan kondisi kesehatan Anda dalam proses memilih metode kontrasepsi?</label>
        <div class="form-check">
            <input type="radio" name="action7" id="action7-done" value="Dilakukan" class="form-check-input" />
            <label for="action7-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action7" id="action7-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action7-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action8">8. Apakah Anda mempertimbangkan kebutuhan keluarga (seperti menunda kehamilan atau berhenti memiliki anak) dalam memilih kontrasepsi?</label>
        <div class="form-check">
            <input type="radio" name="action8" id="action8-done" value="Dilakukan" class="form-check-input" />
            <label for="action8-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action8" id="action8-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action8-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action9">9. Apakah Anda memahami risiko dan manfaat dari metode kontrasepsi yang Anda pilih sebelum memutuskan?</label>
        <div class="form-check">
            <input type="radio" name="action9" id="action9-done" value="Dilakukan" class="form-check-input" />
            <label for="action9-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action9" id="action9-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action9-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="action10">10. Apakah Anda memastikan bahwa keputusan memilih metode kontrasepsi sesuai dengan kebutuhan dan kenyamanan Anda?</label>
        <div class="form-check">
            <input type="radio" name="action10" id="action10-done" value="Dilakukan" class="form-check-input" />
            <label for="action10-done" class="form-check-label">Dilakukan</label>
        </div>
        <div class="form-check">
            <input type="radio" name="action10" id="action10-not-done" value="Tidak dilakukan" class="form-check-input" />
            <label for="action10-not-done" class="form-check-label">Tidak dilakukan</label>
        </div>
    </div>

      <div class="form-actions mt-4">
        <button type="submit" class="btn btn-success rounded-pill px-4">Simpan</button>
        <button type="reset" class="btn btn-danger rounded-pill px-4 ms-2">Batal</button>
      </div>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    $(document).ready(function() {
    $('#kuisionerForm').on('submit', function(e) {
        e.preventDefault();

        // Ambil data dari form
        var formData = {
            nama: $('input[name="nama"]').val(),
            usia: $('input[name="usia"]').val(),
            jenis_kelamin: $('input[name="jenis_kelamin"]:checked').val(),
            pendidikan: $('select[name="pendidikan"]').val(),
            pekerjaan: $('input[name="pekerjaan"]').val(),
            jumlah_anak: $('input[name="jumlah_anak"]').val(),
            kb1: $('input[name="kb1"]:checked').val(),
            kb2: $('input[name="kb2"]:checked').val(),
            kb3: $('input[name="kb3"]:checked').val(),
            kb4: $('input[name="kb4"]:checked').val(),
            kb5: $('input[name="kb5"]:checked').val(),
            kb6: $('input[name="kb6"]:checked').val(),
            kb7: $('input[name="kb7"]:checked').val(),
            q1: $('input[name="q1"]:checked').val(),
            q2: $('input[name="q2"]:checked').val(),
            q3: $('input[name="q3"]:checked').val(),
            q4: $('input[name="q4"]:checked').val(),
            q5: $('input[name="q5"]:checked').val(),
            q6: $('input[name="q6"]:checked').val(),
            action1: $('input[name="action1"]:checked').val(),
            action2: $('input[name="action2"]:checked').val(),
            action3: $('input[name="action3"]:checked').val(),
            action4: $('input[name="action4"]:checked').val(),
            action5: $('input[name="action5"]:checked').val(),
            action6: $('input[name="action6"]:checked').val(),
            action7: $('input[name="action7"]:checked').val(),
            action8: $('input[name="action8"]:checked').val(),
            action9: $('input[name="action9"]:checked').val(),
            action10: $('input[name="action10"]:checked').val(),
        };

        console.log('Data Form:', formData);

        function calculatePengetahuan(data) {
            var totalSkor = 0;
            var maxSkor = 7; // Jumlah soal (7 pertanyaan)
            var pengetahuan = [
                data.kb1, data.kb2, data.kb3, data.kb4, data.kb5, data.kb6, data.kb7
            ];

            // Menghitung jumlah soal benar
            pengetahuan.forEach(function(item) {
                if (item === 'Benar') totalSkor += 1;
            });

            // Menghitung persentase berdasarkan jumlah soal benar dan membulatkan hasilnya
            var percentage = Math.round((totalSkor / maxSkor) * 100); // Membulatkan ke angka bulat
            var kategori = '';

            // Menentukan kategori berdasarkan rentang persentase
            if (percentage >= 80) kategori = 'Baik'; // ≥ 80% = Baik
            else if (percentage >= 60) kategori = 'Cukup'; // 60% - 79.99% = Cukup
            else if (percentage >= 40) kategori = 'Kurang Baik'; // 40% - 59.99% = Kurang Baik
            else kategori = 'Tidak Baik'; // < 40% = Tidak Baik

            return { percentage: percentage, kategori: kategori };
        }


        function calculateSikap(data) {
            var totalSkorqn = 0;
            var totalSkorqp = 0;

            var sikapqp = [
                data.q1, data.q2, data.q4
            ];

            var sikapqn = [
                data.q3, data.q5, data.q6
            ];

        //    inputan dari q1,q2,q4 adalah ss = 4 , s = 3 , e = 2 , ts = 1 , sts = 0
            sikapqp.forEach(function(item) {
                if (item === 'SS') totalSkorqp += 4;
                else if (item === 'S') totalSkorqp += 3;
                else if (item === 'E') totalSkorqp += 2;
                else if (item === 'TS') totalSkorqp += 1;
                else if (item === 'STS') totalSkorqp += 0;
            });

            sikapqn.forEach(function(item) {
                if (item === 'SS') totalSkorqn += 0;
                else if (item === 'S') totalSkorqn += 1;
                else if (item === 'E') totalSkorqn += 2;
                else if (item === 'TS') totalSkorqn += 3;
                else if (item === 'STS') totalSkorqn += 4;
            });

            var t = 16;
            var totalSkor = totalSkorqn + totalSkorqp; ;

            if(totalSkor >= t){
                kategori = 'Sikap Positif';
            }else{
                kategori = 'Sikap Negatif';
            }

            return { percentage: totalSkor, kategori: kategori };

        }


        function calculateTindakan(data) {
            var totalSkor = 0;
            var maxSkor = 10; // Misal 10 untuk setiap action
            var tindakan = [
                data.action1, data.action2, data.action3, data.action4, data.action5,
                data.action6, data.action7, data.action8, data.action9, data.action10
            ];

            tindakan.forEach(function(item) {
                if (item === 'Dilakukan') totalSkor += 10;
                else totalSkor += 0;
            });

            var kategori = '';
            if (totalSkor >= 80) kategori = 'Baik';
            else if (totalSkor >= 60) kategori = 'Cukup';
            else kategori = 'Kurang';

            return { percentage: totalSkor, kategori: kategori };
        }

        // Menghitung hasil untuk Pengetahuan, Sikap, dan Tindakan
        var pengetahuanResult = calculatePengetahuan(formData);
        var sikapResult = calculateSikap(formData);
        var tindakanResult = calculateTindakan(formData);

        // Tampilkan hasil di console
        console.log('Hasil Pengetahuan:', pengetahuanResult);
        console.log('Hasil Sikap:', sikapResult);
        console.log('Hasil Tindakan:', tindakanResult);


        // gabungkan data form dengan hasil perhitungan
        var finalData = {
            ...formData,
            pengetahuan: pengetahuanResult,
            sikap: sikapResult,
            tindakan: tindakanResult
        };

        console.log('Data Akhir:', finalData);

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data yang Anda masukkan akan disimpan.',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, simpan!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user confirms, submit the form data using AJAX
                $.ajax({
                    url: '/save-post-test-kuisioner2', // Ganti dengan URL route controller store
                    type: 'POST',
                    data: finalData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Menambahkan token CSRF ke header
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Data berhasil disimpan!',
                            text: 'Terima kasih telah mengisi kuesioner.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redirect ke halaman lain setelah tombol OK diklik
                                window.location.href = '/kuisioner2';
                            }
                        });
                    },

                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Data gagal disimpan!',
                            text: 'Terjadi kesalahan saat menyimpan data.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        });

    });
});

</script>

{{-- <iframe src="https://forms.gle/wwjkrXmQDEmrfGz49" frameborder="0"></iframe> --}}

@endsection
