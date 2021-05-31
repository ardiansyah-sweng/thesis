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
        <h1>Lingkaran</h1>
        <h2>
          Lingkaran adalah bangun datar dua dimensi dibentuk oleh himpunan semua titik yang mempunyai jarak sama dari suatu titik tetap.
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
            <i>luas (L) = π x r<sup>2</sup></i><br>
            <i>keliling (K) = π x 2 x r</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              P = titik pusat <br>
              r = jari-jari <br>
              d = diameter <br>
              π = konstanta pi (3.14) <br>
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Luas & Keliling Lingkaran</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="r"
              id="r"
              placeholder="Jari Jari"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="d"
              id="d"
              placeholder="Diameter"
              disabled
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
                  <h4>Keliling</h4>
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
  var pi = 3.14
  var pi7 = 22/7
  var jarijari = document.getElementById('r')
  var diameter = document.getElementById('d')
  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  var hasil = document.getElementById('hasil')

  function hitung() {
    diameter.value = jarijari.value * 2
            luas.textContent = pi7 * Number(jarijari.value * jarijari.value)
            keliling.textContent = pi7 * 2 * Number(jarijari.value)
            hasil.innerHTML =
            "<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br>jari-jari (r): " + jarijari.value +
			"<br>diameter (d): " + diameter.value +
            
			"<br><u>luas (L):</u>" +
			"<br>L = π x r<sup>2</sup>" +
			"<br>L = π x r x r" +
			"<br>L = " + pi7 + " x " + jarijari.value + " x " + jarijari.value +
			"<br>L = " + pi7 + " x " + (Number(jarijari.value * jarijari.value)) +
            "<br>L = " + luas.textContent +
			"<br><u>keliling (K):</u>" +
			"<br>L = π x 2 x r" +
			"<br>L = " + pi7 + " x " + 2 + " x " + jarijari.value +
			"<br>L = " + pi7 + " x " + (Number(2 * jarijari.value)) +
            "<br>L = " + keliling.textContent
            
            if (jarijari.value != "" && jarijari.value > 0 && jarijari.value % 7 == 0) {
                return true
            } else if (jarijari.value != "" && jarijari.value > 0 && jarijari.value % 7 != 0) {
                luas.value = pi * Number(jarijari.value * jarijari.value)
                keliling.value = pi * 2 * Number(jarijari.value)
                hasil.innerHTML =
                "<strong>Penyelesaian:</strong>" +
                "<br><u>diketahui:</u>" +
                "<br>jari-jari (r): " + jarijari.value +
                "<br>diameter (d): " + diameter.value +
                
                "<br><u>luas (L):</u>" +
                "<br>L = π x r<sup>2</sup>" +
                "<br>L = π x r x r" +
                "<br>L = " + pi + " x " + jarijari.value + " x " + jarijari.value +
                "<br>L = " + pi + " x " + (Number(jarijari.value * jarijari.value)) +
                "<br>L = " + luas.textContent +
                "<br><u>keliling (K):</u>" +
                "<br>L = π x 2 x r" +
                "<br>L = " + pi + " x " + 2 + " x " + jarijari.value +
                "<br>L = " + pi + " x " + (Number(2 * jarijari.value)) +
                "<br>L = " + keliling.textContent
            } else {
                alert("Masukkan nilai yang lebih besar dari 0")
                jarijari.value = ""
                diameter.value = ""
                luas.textContent = ""
                keliling.textContent = ""
                hasil.innerHTML = ""
            }
  }
  function hapus() {
      jarijari.value = ""
      diameter.value = ""
      luas.textContent = ""
      keliling.textContent = ""
      hasil.innerHTML = ""
  }
</script>
@endsection
