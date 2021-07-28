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
        <h1>Trapesium</h1>
        <h2>
          Trapesium adalah bangun datar dua dimensi yang tersusun oleh 4 buah sisi yaitu 2 buah sisi sejajar yang tidak sama panjang dan 2 buah sisi lainnya.
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
            <i>luas (L) = &#189; x (a + b) x t</i><br>
            <i>keliling (K) = AB + BC + CD + DA</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              t = tinggi trapesium <br>
              a, b = adalah sisi yang sejajar, sisi a merupakan panjang AB dan sisi b merupakan panjang DC
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Luas Trapesium</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="a"
              id="a"
              placeholder="Sisi sejajar (a)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="b"
              id="b"
              placeholder="Sisi sejajar (b)"
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
          <strong>Keliling Trapesium </strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="ab"
              id="ab"
              placeholder="sisi (AB)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="bc"
              id="bc"
              placeholder="sisi (BC)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="cd"
              id="cd"
              placeholder="sisi (CD)"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="da"
              id="da"
              placeholder="sisi (CA)"
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
  var a = document.getElementById('a')
  var b = document.getElementById('b')
  var t = document.getElementById('t')
  var luas = document.getElementById('luas')
  var hasil1 = document.getElementById('hasil1')
  
  function hitung1() {
      luas.textContent = 1/2 * (Number(a.value) + Number(b.value)) * t.value
      hasil1.innerHTML =
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br>sisi sejajar (a): " + a.value +
			"<br>sisi sejajar (b): " + b.value +
			"<br>tinggi (t): " + t.value +
			"<br><u>luas (L):</u>" +
			"<br>L = &#189; x (a + b) x t" +
			"<br>L = " + "&#189; x (" + a.value + " + " + b.value + ")" + " x " + t.value +
			"<br>L = " + "&#189; x " + (Number(a.value) + Number(b.value)) + " x " + t.value +
			"<br>L = " + "&#189; x " + ((Number(a.value) + Number(b.value)) * t.value) +
			"<br>L = " + luas.textContent
			if (a.value != "" && b.value != "" && t.value && a.value > 0 && b.value > 0 && c.value) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				a.value = ""
				b.value = ""
				t.value = ""
				luas.textContent = ""
				hasil1.innerHTML = ""
			}
  }
  function hapus1() {
			a.value = ""
			b.value = ""
			t.value = ""
			luas.textContent = ""
			hasil1.innerHTML = ""
		}
</script>
<script type="text/javascript">
  var ab = document.getElementById('ab')
  var bc = document.getElementById('bc')
  var cd = document.getElementById('cd')
  var da = document.getElementById('da')
  var keliling = document.getElementById('keliling')
  var hasil2 = document.getElementById('hasil2')

  function hitung2() {
      keliling.textContent = Number(ab.value) + Number(bc.value) + Number(cd.value) + Number(da.value)
      hasil2.innerHTML =
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br>sisi (a): " + ab.value +
			"<br>sisi (b): " + bc.value +
			"<br>sisi (c): " + cd.value +
			"<br>sisi (d): " + da.value +
			"<br><u>luas (L):</u>" +
			"<br>K = a + b + c + d" +
			"<br>K = " +  ab.value + " + " + bc.value + " + " + cd.value + " + " + da.value +
			"<br>K = " +  (Number(ab.value) + Number(bc.value)) + " + " + cd.value + " + " + da.value +
			"<br>K = " +  (Number(ab.value) + Number(bc.value) + Number(cd.value)) + " + " + da.value +
			"<br>K = " + keliling.textContent
			if (ab.value != "" && bc.value != "" && cd.value != "" && da.value != "" && ab.value > 0 && bc.value > 0 && cd.value > 0 && da.value > 0) {
				return true
			} else {
				alert ("Masukkan nilai yang lebih besar dari 0")
				ab.value = ""
				bc.value = ""
				cd.value = ""
				da.value = ""
				keliling.textContent = ""
				hasil2.innerHTML = ""
			}
  }
  function hapus2() {
			ab.value = ""
			bc.value = ""
			cd.value = ""
			da.value = ""
			keliling.textContent = ""
			hasil2.innerHTML = ""
		}
</script>
@endsection
