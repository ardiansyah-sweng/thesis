@extends('geometrys.layout')
 
@section('header')
  <section id="hero" class="d-flex align-items-center">
    <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100">
      <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
      <div class="row justify-content-center">
        
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Persegi</h1>
          <h2>
            Persegi adalah bangun datar 2 dimensi yang dibentuk oleh empat
            sisi yang sama panjang dan keempat titik sudutnya membentuk sudut
            siku-siku (90º).
          </h2>
        </div>
      </div>
    </div>
  </section>
@endsection


@section('content')
<main id="main">
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <div class="row">
              <div class="col-sm">
                <strong>Rumus:</strong><br />
                <i>luas (L) = sisi (s) x sisi (s)</i><br />
                <i>keliling (k) = sisi (s) x 4</i>
              </div>
              <div class="col-sm">
                <strong>Keterangan: </strong><br />
                <i>s = sisi persegi</i>
              </div>
            </div>
          </div>
          <div class="row mt-5 d-flex justify-content-center">
            <div class="col-lg-8 mt-5 mt-lg-0">
              <div class="form-group">
                <input
                  type="number"
                  class="form-control"
                  name="Sisi"
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
                      <h4>Keliling</h4>
                      <p id="keliling"></p>
                    </div>
                  </div>
                </div>

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
                      <h4>Hasil</h4>
                      <p id="hasil"></p>
                    </div>
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
      var sisi = document.getElementById("s");
      var luas = document.getElementById("luas");
      var keliling = document.getElementById("keliling");
      var hasil = document.getElementById("hasil");
      function hitung() {
        luas.textContent = Number(sisi.value) * Number(sisi.value);
        keliling.textContent = Number(sisi.value) * 4;
        hasil.innerHTML=
        "<strong>Penyelesaian:</strong>" +
        "<br><u>diketahui:</u>" +
        "<br>sisi (s): " + sisi.value +
        "<br><u>luas (L):</u>" +
        "<br>L = s x s" +
        "<br>L = " + sisi.value + " x " + sisi.value +
        "<br>L = " + luas.textContent +
        "<br><u>keliling (K):</u>" +
        "<br>K = s x 4" +
        "<br>K = " + sisi.value + " x 4" +
        "<br>K = " + keliling.textContent
        
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