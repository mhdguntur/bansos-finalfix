<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">
  <title>Homepage</title>
</head>
<body>
  <section class="navbar-section">
    <div class="navbar">
      <div class="navbar__logo">
        <img src="{{ asset('img/asset/logo2.png')}}" alt="logo">
      </div>
      <div>
        <ul class="navbar__menu">
          <li><a class="menu-item" href="index.html">Home</a></li>
          <li><a class="menu-item" href="">Publikasi</a></li>
          <li><a class="menu-item" href="">Cetak barcode / cetak status</a></li>
          <li><a class="menu-item admin" href="admin.html">Login Admin</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="search-info">
    <h1 class="search-info__title">
      Hallo Admin
    </h1>
    <div class="search-info__input">
      <div class="search-info__input-username">
        <label for="username" class="label-password">Username</label>
        <input type="text" name="username" class="input-username">
      </div>
      <div class="search-info__input-password">
        <label for="password" class="label-password">Password</label>
        <input type="password" name="password" class="input-password">
      </div>
      <input type="button" value="Check" class="button-search">
    </div>
  </section>
</body>
</html>
