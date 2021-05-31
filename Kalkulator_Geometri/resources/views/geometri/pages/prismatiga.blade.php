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
        <h1>Prisma Segitiga</h1>
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
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <strong>Volume & Luas Prisma Segitiga</strong><br /><br>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="as"
              id="as"
              placeholder="Alas Segitiga"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="ts"
              id="ts"
              placeholder="Tinggi Segitiga"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="tp"
              id="tp"
              placeholder="Tinggi Prisma"
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
  var alas_segitiga = document.getElementById('as')
  var tinggi_segitiga = document.getElementById('ts')
  var tinggi_prisma = document.getElementById('tp')
  var la
  var lprismatiga
  var als
  var ast
  var vprismatiga

  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  var hasil = document.getElementById('hasil')

  function hitung() {
      la = 1/2 * Number(alas_segitiga.value) * Number(tinggi_segitiga.value)
      lprismatiga = (2 * la) + (3 * (Number(alas_segitiga.value) * Number(tinggi_prisma.value))) 
      als = (2 * la)
      ast = (3 * (Number(alas_segitiga.value) * Number(tinggi_prisma.value)))
      vprismatiga = (1/2 * Number(alas_segitiga.value) * Number(tinggi_segitiga.value)) * Number(tinggi_prisma.value)

      luas.textContent = lprismatiga
      keliling.textContent = vprismatiga
      hasil.innerHTML=
        "<strong>Penyelesaian:</strong>" +
        "<br>L = (2 x Alas Segitiga)+(3 * (Alas segitiga x Tinggi Prisma))" +
        "<br>L = " + als + ' + ' + ast + 
        "<br>L = " + luas.textContent + 
        "<br>V = (1/2 x Alas x Tinggi Segitiga) x Tinggi Prisma" + 
        "<br>V = (1/2 x " + Number(alas_segitiga.value) + ' x ' +  Number(tinggi_segitiga.value) + ')' + ' x '  + Number(tinggi_prisma.value) +
        "<br>V = " + keliling.textContent 

        
        if (alas_segitiga.value != "" && alas_segitiga.value > 0 && luas_segitiga.value != "" && luas_segitiga.value > 0 && tinggi_prisma.value != "" && tinggi_prisma.value > 0) {
          return true
        } else {
          alert("Masukkan nilai yang lebih besar dari 0")
          alas_segitiga.value = ""
          tinggi_segitiga.value = ""
          tinggi_prisma.value = ""
          luas.textContent = ""
          keliling.textContent = ""
          hasil.textContent = ""
        }
  }
  function hapus() {
			alas_segitiga.value = ""
      tinggi_segitiga.value = ""
      tinggi_prisma.value = ""
			luas.textContent = ""
			keliling.textContent = ""
			hasil.textContent = ""
		}
</script>
@endsection
