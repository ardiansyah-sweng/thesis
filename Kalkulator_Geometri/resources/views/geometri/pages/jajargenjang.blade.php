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
        <h1>Jajar Genjang</h1>
        <h2>
          Jajar genjang adalah bangun datar 2 dimensi yang tersusun oleh 2 pasang sisi yang sama panjang dan sejajar serta mempunyai 2 pasang sudut yang sama besar (pasangan sudut lancip dan pasangan sudut tumpul).
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
            <i>luas (L) = alas (a) x tinggi (t)</i><br>
            <i>keliling (k) = 2 x (sisi alas + sisi miring)</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              a = sisi alas <br>
              b = sisi miring <br>
              t = tinggi
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Luas Jajar Genjang </strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="alas"
              id="alas"
              placeholder="Alas"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="tinggi"
              id="tinggi"
              placeholder="Tinggi"
            />
          </div>
          <div class="row d-flex justify-content-center">
                <div class="text-center mr-4">
                  <button onclick="hitung1()" class="btn btn-primary">
                    Hitung
                  </button>
                </div>
                <div class="text-center">
                  <button onclick="hapus1()" class="btn btn-danger">
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
                  <h4>Hasil</h4>
                  <p id="hasil1"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Keliling Jajar Genjang </strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="a"
              id="a"
              placeholder="sisi (a)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="b"
              id="b"
              placeholder="sisi (b)"
            />
          </div>
          <div class="row d-flex justify-content-center">
                <div class="text-center mr-4">
                  <button onclick="hitung2()" class="btn btn-primary">
                    Hitung
                  </button>
                </div>
                <div class="text-center">
                  <button onclick="hapus2()" class="btn btn-danger">
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
                  <h4>Hasil</h4>
                  <p id="hasil2"></p>
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
  var alas = document.getElementById('alas')
  var tinggi =  document.getElementById('tinggi')
  var luas = document.getElementById('luas')
  var hasil1 = document.getElementById('hasil1')
  function hitung1() {
    luas.textContent	 = Number(alas.value) * Number(tinggi.value)
    hasil1.innerHTML = 
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br>alas (a): " + alas.value +
			"<br>tinggi (t): " + tinggi.value +
			"<br><u>luas (L):</u>" +
			"<br>L = a x t" +
			"<br>L = " + alas.value + " x " + tinggi.value +
			"<br>L = " + luas.textContent
			if (alas.value != "" && tinggi.value != "" && alas.value > 0 && tinggi.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				alas.value = ""
				tinggi.value = ""
				luas.textContent = ""
				hasil1.innerHTML = ""
			}
  }
  function hapus1() {
			alas.value = ""
			tinggi.value = ""
			luas.textContent = ""
			hasil1.innerHTML = ""
		}
</script>
<script type="text/javascript">
  var a = document.getElementById('a')
  var b = document.getElementById('b')
  var keliling = document.getElementById('keliling')
  var hasil2 = document.getElementById('hasil2')

  function hitung2() {
    keliling.textContent = 2 * (Number(a.value) + Number(b.value))
    hasil2.innerHTML = 
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br>sisi alas (a): " + a.value +
			"<br>sisi miring (b): " + b.value +
			"<br><u>keliling (K):</u>" +
			"<br>K = 2 x (a + b)" +
			"<br>K = 2 x (" + a.value + " + " + b.value + ")" +
			"<br>K = 2 x (" + (Number(a.value) + Number(b.value)) + ")" +
			"<br>K = " + keliling.textContent
			if (a.value != "" && b.value != "" && a.value > 0 && b.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				a.value = ""
				b.value = ""
				keliling.textContent = ""
				hasil2.innerHTML = ""
			}
  }
  function hapus2() {
				a.value = ""
				b.value = ""
				keliling.textContent = ""
				hasil2.innerHTML = ""
		}
</script>
@endsection
