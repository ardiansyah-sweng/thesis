@extends('geometrys.layout') @section('header')
<section id="hero" class="d-flex align-items-center">
  <div
    class="container position-relative"
    data-aos="fade-up"
    data-aos-delay="100"
  >
    <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1>Kubus</h1>
        <h2>
          Kubus adalah bangun ruang tiga dimensi yang tersusun dari 6 bidang datar yang kongruen, keenam bidang kongruen pada kubus berbentuk persegi.
        </h2>
      </div>
    </div>
  </div>
</section>
@endsection @section('content')
<main id="main">
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <div class="row">
          <div class="col-sm">
            <strong>Rumus:</strong><br>
            <i>luas (L) = 6 × s × s</i><br>
            <i>volume (V) =  s × s × s</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              s = Sisi <br>
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Volume & Luas Kubus</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="s"
              id="s"
              placeholder="Sisi"
            />
          </div>
          <div class="row d-flex justify-content-center">
                <div class="text-center mr-4">
                  <button onclick="hitung()" class="btn btn-primary">
                    Hitung
                  </button>
                </div>
                <div class="text-center">
                  <button onclick="hapus()" class="btn btn-danger">
                    Hapus
                  </button>
                </div>
              </div>
          <div class="form-row d-flex justify-content-center">
            <div class="col-lg-4">
              <div class="info">
                <div class="email">
                  <i class="icofont-calculator-alt-2"></i>
                  <h4>Luas</h4>
                  <p id="luas"></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info">
                <div class="email">
                  <i class="icofont-calculator-alt-2"></i>
                  <h4>Volume</h4>
                  <p id="keliling"></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info">
                <div class="email">
                  <i class="icofont-calculator-alt-2"></i>
                  <h4>Hasil</h4>
                  <p id="hasil"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End Contact Section -->
</main>
<script type="text/javascript">
  var sisi = document.getElementById('s')

  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  var hasil = document.getElementById('hasil')
  var s

  function hitung() {
      s = Number(sisi.value) * Number(sisi.value)
      luas.textContent = 6 * s
      keliling.textContent = Number(sisi.value) * Number(sisi.value) * Number(sisi.value)
      hasil.innerHTML=
        "<strong>Penyelesaian:</strong>" +
        "<br>L = 6 x s</u>" +
        "<br>L = " + luas.textContent +
        "<br>V = s x s x s" + 
        "<br>V = " + Number(sisi.value) + ' x ' + Number(sisi.value) + ' x ' + Number(sisi.value) + 
        "<br>V = " + keliling.textContent

        if (sisi.value != "" && sisi.value > 0) {
          return true
        } else {
          alert("Masukkan nilai yang lebih besar dari 0")
          sisi.value = ""
          luas.textContent = ""
          keliling.textContent = ""
          hasil.textContent = ""
        }
      }

      function hapus() {
			sisi.value = ""
			luas.textContent = ""
			keliling.textContent = ""
			hasil.textContent = ""
		}
</script>
@endsection