<?php

// Data Array Bandara Asal
$bandara_asal = [
  [
    'no' => 1, 'nama_bandara' => 'Soekarna-Hatta (CGK)', 'harga' => 50000
  ],
  [
    'no' => 2, 'nama_bandara' => 'Husein Sastranegara (BDO)', 'harga' => 30000,
  ],
  [
    'no' => 3, 'nama_bandara' => 'Abdul Rachman Saleh (MLG)', 'harga' => 40000,
  ],
  [
    'no' => 4, 'nama_bandara' => 'Juanda (SUB)', 'harga' => 40000,
  ],
];

// Data Array Bandara Tujuan
$bandara_tujuan = [
  [
    'no' => 1, 'nama_bandara' => 'Ngurah Rai (DPS)', 'harga' => 80000
  ],
  [
    'no' => 2, 'nama_bandara' => 'Hasanuddin (UPG)', 'harga' => 70000,
  ],
  [
    'no' => 3, 'nama_bandara' => 'Inanwatan (INX)', 'harga' => 90000,
  ],
  [
    'no' => 4, 'nama_bandara' => 'Sultan Iskandarmuda (BTJ)', 'harga' => 70000,
  ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Form Pemensanan &mdash; Pengkuh Airlines</title>

  <!-- Link Icon -->
  <link rel="icon" type="image/x-icon" href="library/assets/images/logo.png">

  <!-- Link Font -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

  <!-- Link CSS -->
  <link rel="stylesheet" href="library/assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="library/assets/css/animate.css">
  <link rel="stylesheet" href="library/assets/fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="library/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="library/assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="library/assets/fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="library/assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="library/assets/css/select2.css">
  <link rel="stylesheet" href="library/assets/css/helpers.css">
  <link rel="stylesheet" href="library/assets/css/style.css">

</head>

<body>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="library/assets/images/logo.png" height="50px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="ion-navicon"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END Navbar -->



  <!-- Section -->
  <section class="probootstrap-cover overflow-hidden relative" style="background-image: url('library/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <!-- Menampilkan Data Bandara Asal -->
        <div class="col-lg-6">
          <div class="media probootstrap-media d-flex align-items-stretch  probootstrap-animate">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Bandara Asal</th>
                <th>Pajak</th>
              </tr>
              <?php foreach ($bandara_asal as $data) : ?>
                <tr>
                  <td><?= $data['no']; ?></td>
                  <td><?= $data['nama_bandara']; ?></td>
                  <td><?= $data['harga']; ?></td>
                </tr>
              <?php endforeach; ?>

            </table>
          </div>
        </div>
        <!-- Akhir Data Bandara Asal -->
        <!-- Menampilkan Data Bandara Tujuan -->
        <div class="col-lg-6">
          <div class="media probootstrap-media d-flex align-items-stretch  probootstrap-animate">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Bandara Tujuan</th>
                <th>Pajak</th>
              </tr>
              <?php foreach ($bandara_tujuan as $data) : ?>
                <tr>
                  <td><?= $data['no']; ?></td>
                  <td><?= $data['nama_bandara']; ?></td>
                  <td><?= $data['harga']; ?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
        <!-- Menampilkan Data Bandara Tujuan -->

        <!-- Form Pemesanan Tiket -->
        <div class="col-12 mt-4 probootstrap-animate">
          <form action="pesan-tiket.php" method="post" class="probootstrap-form">
            <h3>Form Pemesanan Tiket</h3>
            <div class="form-group">
              <div class="row mb-3">
                <!-- Form Bandara Asal -->
                <div class="col-6">
                  <div class="form-group">
                    <label for="id_label_single">Bandara Asal</label>
                    <label for="id_label_single" style="width: 100%;">
                      <select class="js-example-basic-single js-states form-control" id="id_label_single" style="width: 100%;" name="bandara_asal">
                        <?php foreach ($bandara_asal as $data) : ?>
                          <option value="<?= $data['nama_bandara']; ?>"><?= $data['nama_bandara']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </label>
                  </div>
                </div>
                <!-- Akhir Form Bandara Asal -->
                <!-- Form Bandara Tujuan -->
                <div class="col-6">
                  <div class="form-group">
                    <label for="id_label_single2">To</label>
                    <div class="probootstrap_select-wrap">
                      <label for="id_label_single2" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control" id="id_label_single2" style="width: 100%;" name="bandara_tujuan">
                          <?php foreach ($bandara_tujuan as $data) : ?>
                            <option value="<?= $data['nama_bandara']; ?>"><?= $data['nama_bandara']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- Form Bandara Tujuan -->
              </div>
              <div class="row mb-5">
                <!-- Form Maskapai -->
                <div class="col-md">
                  <div class="form-group">
                    <label for="probootstrap-date-departure">Maskapai</label>
                    <div class="probootstrap-date-wrap">
                      <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
                          <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z" />
                        </svg></span>
                      <input type="text" class="form-control" placeholder="Nama Maskapai" name="nama_maskapai">
                    </div>
                  </div>
                </div>
                <!-- Akhir Form Maskapai -->
                <!-- Form Harga Tiket -->
                <div class="col-md">
                  <div class="form-group">
                    <label for="probootstrap-date-arrival">Harga Tiket</label>
                    <div class="probootstrap-date-wrap">
                      <span class="icon ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                          <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                          <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                        </svg>
                      </span>
                      <input type="number" class="form-control" placeholder="Harga Tiket" name="harga">
                    </div>
                  </div>
                </div>
                <!-- Akhir Form Harga Tiket -->
              </div>
              <div class="row probootstrap-form">
                <!-- Button Submit -->
                <div class="col-md ">
                  <input type="submit" value="Submit" class="btn btn-primary btn-block">
                </div>
                <!-- End Button Submit -->
              </div>
            </div>
          </form>
        </div>
        <!-- Akhir Form Pemesanan Tiket -->

      </div>
      <div class="row align-items-center">


      </div>
    </div>

  </section>
  <!-- END section -->


  <script src="library/assets/js/jquery.min.js"></script>
  <script src="library/assets/js/popper.min.js"></script>
  <script src="library/assets/js/bootstrap.min.js"></script>
  <script src="library/assets/js/owl.carousel.min.js"></script>
  <script src="library/assets/js/bootstrap-datepicker.js"></script>
  <script src="library/assets/js/jquery.waypoints.min.js"></script>
  <script src="library/assets/js/jquery.easing.1.3.js"></script>
  <script src="library/assets/js/select2.min.js"></script>
  <script src="library/assets/js/main.js"></script>
</body>