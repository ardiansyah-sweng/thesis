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
        <h1>Limas Balok</h1>
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
          <strong>Volume & Luas Limas Balok</strong><br /><br>
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
              name="l"
              id="l"
              placeholder="Lebar"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="t"
              id="t"
              placeholder="Tinggi Limas"
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
  var luas_alas_balok
  var vlimas
  var tinggi_limas
  var luas_segitiga
  var lssegitiga
  var h
  var llimassegitiga
  var ts
  var ll

  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  var hasil = document.getElementById('hasil')

  function hitung() {
      luas_alas_balok = Number(panjang.value) * Number(lebar.value)
      vlimas = 1/3 * luas_alas_balok * Number(tinggi.value)
      tinggi_limas = Number(tinggi.value) * Number(tinggi.value)
      luas_segitiga = (1/2 * Number(panjang.value) * Number(lebar.value)) * (1/2 * Number(panjang.value) * Number(lebar.value))
      lssegitiga = luas_segitiga * tinggi_limas
      h = Math.sqrt(lssegitiga)
      llimassegitiga = luas_alas_balok + 4 * lssegitiga
      ts = 4 * (1/2 * Number(panjang.value) * Number(lebar.value) * h)
      ll = luas_alas_balok + ts

      luas.textContent = ll
      keliling.textContent = vlimas
      hasil.innerHTML=
        "<strong>Penyelesaian:</strong>" +
        "<br>V = 1/3 * p * l * tinggi limas" +
        "<br>V = 1/3" + ' x ' + Number(panjang.value) + ' x ' + Number(lebar.value) + ' x ' + Number(tinggi.value) + 
        "<br>V = " + keliling.textContent + 
        "<br>Tinggi Segitiga = (√1/2 x p x l)<sup>2</sup> + tinggi limas<sup>2</sup>" + 
        "<br>Tinggi Segitiga = (√1/2 x " + Number(panjang.value)  + ' x ' +  Number(lebar.value) + ")<sup>2</sup> +" + tinggi_limas + "<sup>2</sup>" +
        "<br>Tinggi Segitiga = √ " + luas_segitiga + " + " + tinggi_limas + 
        "<br>Tinggi Segitiga = √ " + lssegitiga + 
        "<br>Tinggi Segitiga = " + h +
        "<br>Luas Limas = Luas alas + 4 * (1/2 x sisi x tinggi segitiga)" + 
        "<br>Luas Limas = " + luas_alas_balok + ' + ' + 4 + ' x ' + "( 1/2 x " + Number(panjang.value) + ' x ' + Number(lebar.value) + ' x ' + h + ")" + 
        "<br>Luas Limas = " + luas_alas_balok + ' + ' + ts + 
        "<br>Luas Limas = " + luas.textContent
        
        if (panjang.value != "" && panjang.value > 0 && lebar.value != "" && lebar.value > 0 && tinggi.value != "" && tinggi.value > 0) {
          return true
        } else {
          alert("Masukkan nilai yang lebih besar dari 0")
          panjang.value = ""
          lebar.value = ""
          tinggi.value = ""
          luas.textContent = ""
          keliling.textContent = ""
          hasil.textContent = ""
        }
  }
  function hapus() {
			panjang.value = ""
      lebar.value = ""
      tinggi.value = ""
			luas.textContent = ""
			keliling.textContent = ""
			hasil.textContent = ""
		}
</script>
@endsection
