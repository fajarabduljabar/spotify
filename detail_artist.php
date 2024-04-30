<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3</title>
  <script src="https://kit.fontawesome.com/03b0c5c9d8.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;700;800&family=Poppins&display=swap" rel="stylesheet">
</head>

<style>
  .card-body p strong {
    color: #757477;
  }

  .card-body p strong:hover {
    color: white;
  }
</style>




<html>

<body style="background-color: black;">
  <div class="container-fluid">
    <nav style="background-color: #191919;" class="navbar">
      <a class="navbar-brand p-2" href="#">
        <span class="badge text-dark float-end" style="background-color: white; font-size: 15px; border-radius: 10px">Explore premium</span>
        <img style="width: 10%;" src="Spotify_Logo_RGB_White.png" alt="">
      </a>
    </nav>
    <div class="card-body">
      <div class="row">
        <div class="col-3 bg-black">
          <div class="card m-5 text-white bg-black">
            <div class="card-body">
              <a style="text-decoration: none; color: white;" href="p2.php">
                <p><i class="fa-solid fa-house"></i><b> Home</b></p>
              </a>
              <p><strong><i class="fa-solid fa-magnifying-glass"></i> Search</strong></p>
            </div>
          </div>
          <div style="background-color: #121212;" class="card m-5">
            <div class="card-body ">
              <p><strong><i class="fa-brands fa-spotify"></i> Recent Listening</strong></p><br>

              <div class="row">
                <div class="col-3">
                  <img style="width: 100%;" src="photo_2023-12-08_10-52-31.jpg" alt="">
                </div>
                <div class="col-9">
                  <p style="color: white;"><b>Seberapa Pantas</b> <br><small style="color: #7D7E80;">Sheila on 7</small></p>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <img style="width: 100%;" src="photo_2023-12-08_10-52-31.jpg" alt="">
                </div>
                <div class="col-9">
                  <p style="color: white;"><b>Samsul Meriyang</b> <br><small style="color: #7D7E80;">Asep and the backbone</small></p>
                </div>
              </div>
              <p style="color: #7D7E80;">see more <i class="fa-solid fa-arrow-circle-right"></i></p>
            </div>
          </div>
        </div>
        <?php



        $genre = [
          [
            "id" => 1,
            "nama_genre" => "Pop"
          ],
          [
            "id" => 2,
            "nama_genre" => "Klasik"
          ],
          [
            "id" => 3,
            "nama_genre" => "Rock"
          ]
        ];

        $album = [
          [
            "id" => 1,
            "nama_album" => "Sebuah Nama, Sebuah Cerita"
          ],
          [
            "id" => 2,
            "nama_album" => "Kisah Klasik"
          ],
          [
            "id" => 3,
            "nama_album" => "Awan Kinton"
          ]
        ];

        $musik = [
          [
            "id" => 1,
            "judul_lagu" => "Numb",
            "artist" => "Linkin Park",
            "listener" => "30578990",
            "duration" => 2.59,
            "genre_id" => 3,
            "album_id" => 1
          ],
          [
            "id" => 2,
            "judul_lagu" => "Laskar Pelangi",
            "artist" => "Nidji",
            "listener" => "10548880",
            "duration" => 3.12,
            "genre_id" => 3,
            "album_id" => 1
          ],
          [
            "id" => 3,
            "judul_lagu" => "Selimut Hati",
            "artist" => "Dewa 19",
            "listener" => "20118980",
            "duration" => 4.05,
            "genre_id" => 2,
            "album_id" => 2
          ],
          [
            "id" => 4,
            "judul_lagu" => "Separuh Aku",
            "artist" => "Noah",
            "listener" => "10078980",
            "duration" => 3.02,
            "genre_id" => 1,
            "album_id" => 2
          ],
          [
            "id" => 5,
            "judul_lagu" => "Tanya Bapak",
            "artist" => "Asep Kasep",
            "listener" => "15799080",
            "duration" => 3.45,
            "genre_id" => 1,
            "album_id" => 3
          ],
        ];


        ?>

        <div class="col-9 bg-black">
          <div class="card text-bg-dark m-5">
            <img src="photo_2023-12-08_1.jpg" class="card-img" alt="...">

            <div class="card-img-overlay">
              <p style="padding-top: 200px;"><i class="fa-solid fa-check-circle text-info"></i> Artist verificated</p>
              <?php
              $no = 1;
              foreach ($musik as $msk) {

                if ($_GET['id'] == $msk['id']) {

              ?>
                  <h1 style="font-size: 80px; font-family: 'Open Sans', sans-serif;"><b><?= $msk['artist'] ?></b></h1>
                  <p class="card-text"><small><i class="fa-solid fa-play-circle"></i> <?= number_format($msk['listener'], 0, ",", ",") ?> monthly listener</small></p>
                  <span class="badge text-dark p-2" style="background-color: #16D860; font-size: 15px; border-radius: 15px"><i class="fa-solid fa-pause-circle"></i> Pause</span>&nbsp;&nbsp;
                  <span class="badge text-dark p-2" style="background-color: white; font-size: 15px; border-radius: 15px">&nbsp;&nbsp;Follow&nbsp;&nbsp;</span>
            </div>
          </div>
          <div class="card m-5 bg-dark">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th style="color: #7D7E80;">#</th>
                  <th style="color: #7D7E80;">Title</th>
                  <th style="color: #7D7E80;">Album</th>
                  <th style="color: #7D7E80;">Artist</th>
                  <th style="color: #7D7E80;"><i class="fa-regular fa-clock"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php
                }
              }

              if ($_GET["id"] == 1) {
                foreach ($musik as $msk) {
                  if ($msk["album_id"] == 1) {

                ?>

                  <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $msk["judul_lagu"] ?></td>
                    <?php
                    foreach ($album as $alb) {
                      if ($alb["id"] == $msk["album_id"]) {

                    ?>
                        <td><?= $alb["nama_album"] ?></td>
                    <?php
                      }
                    }
                    ?>
                    <td><?= $msk["artist"] ?></td>
                    <td><?= $msk["duration"] ?></td>
                  </tr>
                <?php
                  }
                }
              } elseif ($_GET["id"] == 2) {
                foreach ($musik as $msk) {
                  if ($msk["album_id"] == 1) {

                ?>

                  <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $msk["judul_lagu"] ?></td>
                    <?php
                    foreach ($album as $alb) {
                      if ($alb["id"] == $msk["album_id"]) {

                    ?>
                        <td><?= $alb["nama_album"] ?></td>
                    <?php
                      }
                    }
                    ?>
                    <td><?= $msk["artist"] ?></td>
                    <td><?= $msk["duration"] ?></td>
                  </tr>
                <?php
                  }
                }
              } elseif ($_GET["id"] == 3) {
                foreach ($musik as $msk) {
                  if ($msk["album_id"] == 2) {

                ?>

                  <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $msk["judul_lagu"] ?></td>
                    <?php
                    foreach ($album as $alb) {
                      if ($alb["id"] == $msk["album_id"]) {

                    ?>
                        <td><?= $alb["nama_album"] ?></td>
                    <?php
                      }
                    }
                    ?>
                    <td><?= $msk["artist"] ?></td>
                    <td><?= $msk["duration"] ?></td>
                  </tr>
                <?php
                  }
                }
              } elseif ($_GET["id"] == 4) {
                foreach ($musik as $msk) {
                  if ($msk["album_id"] == 2) {

                ?>

                  <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $msk["judul_lagu"] ?></td>
                    <?php
                    foreach ($album as $alb) {
                      if ($alb["id"] == $msk["album_id"]) {

                    ?>
                        <td><?= $alb["nama_album"] ?></td>
                    <?php
                      }
                    }
                    ?>
                    <td><?= $msk["artist"] ?></td>
                    <td><?= $msk["duration"] ?></td>
                  </tr>
                <?php
                  }
                }
              } elseif ($_GET["id"] == 5) {
                foreach ($musik as $msk) {
                  if ($msk["album_id"] == 3) {

                ?>

                  <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $msk["judul_lagu"] ?></td>
                    <?php
                    foreach ($album as $alb) {
                      if ($alb["id"] == $msk["album_id"]) {

                    ?>
                        <td><?= $alb["nama_album"] ?></td>
                    <?php
                      }
                    }
                    ?>
                    <td><?= $msk["artist"] ?></td>
                    <td><?= $msk["duration"] ?></td>
                  </tr>
            <?php
                  }
                }
              }

            ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>