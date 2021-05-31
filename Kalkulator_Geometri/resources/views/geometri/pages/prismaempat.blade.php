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
        <h1>Prisma Segiempat</h1>
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
          <strong>Volume & Luas Limas Kubus</strong><br /><br>
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
  var pl
  var pt
  var lt
  var lbalok
  var vprismaempat

  var luas = document.getElementById('luas')
  var keliling = document.getElementById('keliling')
  var hasil = document.getElementById('hasil')

  function hitung() {   
      pl = Number(panjang.value) * Number(lebar.value)
      pt = Number(panjang.value) * Number(tinggi.value)
      lt = Number(lebar.value) * Number(tinggi.value)
      lbalok = 2 * (pl+pt+lt)
      vprismaempat = Number(panjang.value) * Number(lebar.value) * Number(tinggi.value)

      luas.textContent = lbalok
      keliling.textContent = vprismaempat
      hasil.innerHTML=
        "<strong>Penyelesaian:</strong>" +
        "<br>L = 2 x (p.l + p.t + l.t)" +  
        "<br>L = 2 x (" + Number(panjang.value) + ' x ' + Number(lebar.value) + ')' + '+' + '(' + Number(panjang.value) + ' x ' + Number(tinggi.value) + ')' + '+' + '(' + Number(lebar.value) + ' + ' + Number(tinggi.value) +  ')' +
        "<br>L = " + luas.textContent
        "<br>V = p x l x t" + 
        "<br>V = " + Number(panjang.value) + ' x ' + Number(lebar.value) + ' x ' + Number(tinggi.value) + 
        "<br>V = " + keliling.textContent
        
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
