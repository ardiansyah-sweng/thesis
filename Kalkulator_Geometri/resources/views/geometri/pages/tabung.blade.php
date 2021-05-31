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
        <h1>Tabung</h1>
        <h2>
          Tabung adalah bangun ruang yang tersusun oleh 3 buah sisi yaitu 2 buah lingkaran yang mempunyai ukuran yang sama dan 1 segiempat yang mengelilingi kedua lingkaran tersebut.
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
            <i>luas (L) = 2 × π × r × (r + t)</i><br>
            <i>volume (V) = π × r × r × t</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              r = jari - jari <br>
              t = tinggi <br>
              π = phi (22/7)
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Volume & Luas Tabung</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="r"
              id="r"
              placeholder="Jari - Jari"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="t"
              id="t"
              placeholder="Tinggi"
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
  var jari = document.getElementById('r')
  var tinggi = document.getElementById('t')
  var phi = 22/7

  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  var hasil = document.getElementById('hasil')

  function hitung() {
      luas.textContent = 2 * phi * Number(jari.value) * (Number(jari.value) + Number(tinggi.value))
      keliling.textContent = phi * Number(jari.value) * Number(jari.value) * Number(tinggi.value)
      hasil.innerHTML=
        "<strong>Penyelesaian:</strong>" +
        "<br>L = 2 x 22/7 x r x (r + t)</u>" +
        "<br>L = 2 x " + phi + ' x ' + Number(jari.value) + ' x ' + '(' + Number(jari.value) + ' + ' + Number(tinggi.value) + ')' + 
        "<br>L = " + luas.textContent +  
        "<br>V = 22/7 x r x r x t" + 
        "<br>V = " + phi + ' x ' + Number(jari.value) + ' x ' + Number(jari.value) + ' x ' + Number(tinggi.value) + 
        "<br>V = " + keliling.textContent

        if (jari.value != "" && jari.value > 0 && tinggi.value != "" && tinggi.value > 0 ) {
          return true
        } 
         else {
          alert("Masukkan nilai yang lebih besar dari 0")
          jari.value = ""
          tinggi.value = ""
          luas.textContent = ""
          keliling.textContent = ""
          hasil.textContent = ""
        }
  }
function hapus() {
  jari.value = ""
  tinggi.value = ""
  luas.textContent = ""
  keliling.textContent = ""
  hasil.textContent = ""
}
</script>
@endsection
