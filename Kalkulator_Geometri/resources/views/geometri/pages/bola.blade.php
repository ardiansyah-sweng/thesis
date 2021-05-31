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
        <h1>Bola</h1>
        <h2>
          Bola adalah bangun ruang dengan bentuk bulat sempurna yang tersusun oleh tidak terhingga lingkaran yang mempunyai jari-jari dan pusat lingkaran yang sama.
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
            <i>luas (L) = 4 × π × r²</i><br>
            <i>volume (K) =  4/3 × π × r³</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              r = jari - jari <br>
              π = phi (22/7) atau (3.14) 
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Volume & Luas Bola</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="r"
              id="r"
              placeholder="Jari - Jari"
            />
          </div>
          <div class="text-center">
            <button onclick="hitung()" class="btn btn-primary">Hitung</button>
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
  var pi7 = 22/7
  var pi = 3.14

  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  var hasil = document.getElementById('hasil')

  function hitung() {
      luas.textContent = 4 * pi7 * (Number(jari.value) * Number(jari.value))
      keliling.textContent = 4 / 3 * pi7 * (Number(jari.value) * Number(jari.value) * Number(jari.value))
      hasil.innerHTML =
            "<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br>jari-jari (r): " + jari.value +

			"<br><u>luas (L):</u>" +
			"<br>L = 4 × π × r<sup>2</sup>" +
			"<br>L = 4 × π × r x r</sup>" +
			"<br>L = 4 x " + pi7 + " x " + jari.value + " x " + jari.value +
			"<br>L = 4 x " + pi7 + " x " + (Number(jari.value * jari.value)) +
			"<br>L = 4 x " + (pi7 * Number(jari.value * jari.value)) +
            "<br>L = " + luas.textContent +

			"<br><u>volume (V):</u>" +
			"<br>V = 4/3 × π × r³" +
            "<br>V = 4/3 × π × r x r x r" +
			"<br>L = 4/3 × " + pi7 + " x " + jari.value + " x " + jari.value + " x " + jari.value +
			"<br>L = 4/3 × " + pi7 + " x " + (Number(jari.value) * Number(jari.value) * Number(jari.value)) +
			"<br>L = 4/3 × " + (pi7 * Number(jari.value) * Number(jari.value) * Number(jari.value)) +
            "<br>L = " + keliling.textContent
			
			if (jari.value != "" && jari.value > 0 && jari.value % 7 == 0) {
                return true
            } else if (jari.value != "" && jari.value > 0 && jari.value % 7 != 0) {
                  luas.textContent = 4 * pi * (Number(jari.value) * Number(jari.value))
                  keliling.textContent = 4 / 3 * pi * (Number(jari.value) * Number(jari.value) * Number(jari.value))
                  hasil.innerHTML =
                  "<strong>Penyelesaian:</strong>" +
               "<br><u>diketahui:</u>" +
               "<br>jari-jari (r): " + jari.value +

               "<br><u>luas (L):</u>" +
               "<br>L = 4 × π × r<sup>2</sup>" +
               "<br>L = 4 × π × r x r</sup>" +
               "<br>L = 4 x " + pi + " x " + jari.value + " x " + jari.value +
               "<br>L = 4 x " + pi + " x " + (Number(jari.value * jari.value)) +
               "<br>L = 4 x " + (pi * Number(jari.value * jari.value)) +
               "<br>L = " + luas.textContent +

               "<br><u>volume (V):</u>" +
               "<br>V = 4/3 × π × r³" +
               "<br>V = 4/3 × π × r x r x r" +
               "<br>L = 4/3 × " + pi + " x " + jari.value + " x " + jari.value + " x " + jari.value +
               "<br>L = 4/3 × " + pi + " x " + (Number(jari.value) * Number(jari.value) * Number(jari.value)) +
               "<br>L = 4/3 × " + (pi * Number(jari.value) * Number(jari.value) * Number(jari.value)) +
               "<br>L = " + keliling.textContent
            } else {
                alert("Masukkan nilai yang lebih besar dari 0")
                jari.value = ""
                luas.textContent = ""
                keliling.textContent = ""
                hasil.innerHTML = ""
            }
  }
	function hapus() {
		jari.value = ""
		luas.textContent = ""
		keliling.textContent = ""
		hasil.innerHTML = ""
	}
</script>
@endsection
