<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Homepage</title>
</head>
<body>
  <section class="navbar-section">
    <div class="navbar">
      <div class="navbar__logo">
        <img src="{{ asset('img/asset/logo2.png') }}" alt="logo">
      </div>
      <div>
        <ul class="navbar__menu">
          <li><a class="menu-item" href="index.html">Home</a></li>
          <li><a class="menu-item" href="">Publikasi</a></li>
          <li><a class="menu-item" href="">Cetak barcode / cetak status</a></li>
          <li><a class="menu-item admin" href="{{ url('signin') }}">Login Admin</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="search-info">
    <h1 class="search-info__title">
      Pencarian bantuan sosial kecamatan parungpanjang
    </h1>
    <div class="search-info__input">
      <label for="nomorbantuan" class="label-bantuan">Cari Bantuan Anda</label>
      <input type="text" name="nomorbantuan" class="input-bantuan">
      <input type="button" value="Check" class="button-search">
    </div>
  </section>
  <!-- after input has value v-if-->
  <section class="profil-bantuan">
    <div class="profil-bantuan__heading">
      <div class="profil-bantuan__profile">
        <div class="profil-bantuan__label">
          Bantuan sosial untuk keluarga
        </div>
        <div class="profil-bantuan__name">
          Keluarga A
        </div>
        <div class="profil-bantuan__nomor">
          081364945370
        </div>
      </div>
      <div class="profil-bantuan__logo">
        <img src="./asset/logo-bansos.png" alt="logo bansos">
      </div>
    </div>
    <div class="profil-bantuan__table">
      <div class="profil-bantuan__tahap">
        Bantuan Sosial Kab.Bogor Pandemi Covid-19 Ke-5
      </div>
      <div class="profil-bantuan__tanggal">
        Diambil Mulai :
        <div class="profil-bantuan__value-tanggal">
          10 Juni 2020
        </div>
      </div>
      <div class="profil-bantuan__expired">
        Berlaku Hingga :
        <div class="profil-bantuan__value-expired">
          30 Juni 2020
        </div>
      </div>
    </div>
    <div class="profil-bantuan__status">
      <div class="profil-bantuan__check-status">
        <div class="profil-bantuan__status-label">
          Status
        </div>
        <div class="profil-bantuan__status-value">
          BELUM DI AMBIL
        </div>
      </div>
      <div class="profil-bantuan__code">
        <div class="profil-bantuan__qrcode">
          <!-- image -->
        </div>
        <div class="profil-bantuan__action-button">
          <div class="profil-bantuan__button-cetak">
            Cetak
          </div>
          <div class="profil-bantuan__button">
            Simpan Gambar
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal">
    <div class="button-close">
      x
    </div>
    Anda telah mencetak/ menyimpan bukti bantuan sosial :
    bantuan sosial kab.bogor pandemi covid-19 ke-5
    Silahkan datang ke kecamatan untuk proses pencairan ditanggal yang tertera di bukti bantuan
  </div>
</body>
<script>
  const cetakBtn = document.querySelector(".profil-bantuan__button-cetak")
  const closeBtn = document.querySelector(".button-close")
  const modal = document.querySelector(".modal")

  cetakBtn.addEventListener("click", function () {
    modal.style.display = "block"
    console.log("this is modal");
  })

  closeBtn.addEventListener("click", function () {
    modal.style.display = "none"
  })
</script>
</html>
