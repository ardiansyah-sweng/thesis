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
        <h1>Balok</h1>
        <h2>
        Balok adalah bangun ruang tiga dimensi yang tersusun oleh 3 pasang segi empat (persegi atau persegi panjang) dan paling sedikit mempunyai 1 pasangan sisi segi empat yang mempunyai bentuk yang berbeda.
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
            <i>luas = 2 x ( p x l + p x t + l x t)</i><br>
            <i>volume = p x l x t</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              p = Panjang <br>
              l = Lebar <br>
              t = tinggi
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Volume & Luas Balok</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="l"
              id="l"
              placeholder="Lebar"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="p"
              id="p"
              placeholder="Panjang"
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
  var panjang = document.getElementById('p')
  var lebar = document.getElementById('l')
  var tinggi = document.getElementById('t')

  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  var hasil = document.getElementById('hasil')

  function hitung() {
      luas.textContent = 2 * (Number(panjang.value) * Number(lebar.value) + Number(panjang.value) * Number(tinggi.value) + Number(lebar.value) * Number(tinggi.value))
      keliling.textContent = Number(panjang.value) * Number(lebar.value) * Number(tinggi.value)

      hasil.innerHTML =
      "<strong>Penyelesaian:</strong>" +
      "<br><u>diketahui:</u>" +
	    "<br>panjang (p): " + panjang.value +
	    "<br>lebar (l): " + lebar.value +
	    "<br>tinggi (t): " + tinggi.value +
			"<br><u>luas (L):</u>" +
			"<br>L = 2 x (p x l + p x t + l x t)" +
			"<br>L = 2 x (" + panjang.value + " x " + lebar.value + " + " + panjang.value + " x " + tinggi.value + " + " + lebar.value + " x " + tinggi.value + ")" +
			"<br>L = 2 x (" + (Number(panjang.value) * Number(lebar.value)) + " + " + (Number(panjang.value) * Number(tinggi.value)) + " + " + (Number(lebar.value) * Number(tinggi.value)) + ")" +
			"<br>L = 2 x (" + (Number(panjang.value) * Number(lebar.value) + Number(panjang.value) * Number(tinggi.value)) + " + " + (Number(lebar.value) * Number(tinggi.value)) + ")" +
			"<br>L = 2 x (" + (Number(panjang.value) * Number(lebar.value) + Number(panjang.value) * Number(tinggi.value) + Number(lebar.value) * Number(tinggi.value)) + ")" +
			"<br>L = " + luas.textContent +

			"<br><u>volume (V)</u>" +
			"<br>V = p x l x t" +
			"<br>V = " + panjang.value + " x " + lebar.value + " x " + tinggi.value +
			"<br>V = " + (Number(panjang.value) * Number(lebar.value)) + " x " + tinggi.value + 
			"<br>V = " + keliling.textContent


			if (panjang.value != "" && lebar.value != "" && tinggi.value != "" && panjang.value > 0 && lebar.value > 0 && tinggi.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				panjang.value = ""
				lebar.value = ""
				tinggi.value = ""
				luas.textContent = ""
				keliling.textContent = ""
				hasil.innerHTML = ""
			}
  }
  function hapus() {
				panjang.value = ""
				lebar.value = ""
				tinggi.value = ""
				luas.textContent = ""
				keliling.textContent = ""
				hasil.innerHTML = ""
			}
</script>
@endsection
