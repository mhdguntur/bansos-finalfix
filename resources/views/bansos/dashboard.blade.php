<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style-dashboard.css') }}">
  <title>Dashboard</title>
</head>
<body>
  <div class="sidebar">
    <div class="sidebar__head">
      <div class="sidebar__picture">
        <img src="" alt="">
      </div>
      <div class="sidebar__name">
        Admin 1
      </div>
    </div>
    <div class="sidebar__menu-wrapper">
      <ul class="sidebar__menu">
        <li><a class="menu-item" href="">Dashboard</a></li>
        <li><a class="menu-item" href="">Claim Bantuan</a></li>
        <li><a class="menu-item" href="">Data Warga</a></li>
      </ul>
      <ul class="sidebar__menu-last">
        <li><a class="menu-item__last" href="">Log out</a></li>
      </ul>
    </div>
  </div>
  <section class="main-content">
    <h1 class="main-content__heading">
      Pencairan bantuan sosial kecamatan parungpanjang
    </h1>
    <div class="main-content__input">
      <div class="main-content__input-head">
        <div class="input-form">
          <label for="event">Event Name</label>
          <select class="event" name="cars">
            <option value="value1">value1</option>
            <option value="value2">value2</option>
            <option value="value3">value3</option>
            <option value="value4">value4</option>
          </select>
        </div>
        <div class="input-form">
          <label for="dateevent">Cloter Date</label>
          <input type="date" name="dateevent">
        </div>
      </div>
      <div class="main-content__input-bottom">
        <div class="input-form">
          <label for="nik">Nomor Induk Keluarga</label>
          <input type="text" name="nik">
        </div>
        <div class="input-form">
          <label for="date">Scan</label>
          <div class="input-qr">
            <img src="" alt="">
          </div>
        </div>
      </div>
      <div class="input-button">
        Claim Bantuan
      </div>
    </div>
  </section>
  <hr>
  <section class="content-data">
    <div class="table-data">
      <div class="table-data__name">
        Keluarga A
      </div>
      <div class="table-data__bantuan">
        Bansos - Presiden - 1
      </div>
      <div class="table-data__date">
        15/09/2022
      </div>
    </div>
    <div class="check-table">
      <input class="checkbox-input" type="checkbox">
    </div>
    <div class="input-button variant">
      Konfirmasi Bantuan
    </div>
  </section>
</body>
</html>
