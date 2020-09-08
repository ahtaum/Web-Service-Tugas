<?php

// pakai crul dengan fungsi
function ambil_CURL($url) {
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $hasil = curl_exec($curl);
  curl_close($curl);

  return json_decode($hasil, true);
}

// book api
$url = ambil_CURL('https://api.nytimes.com/svc/books/v3/lists/overview.json?api-key=bYJYPNO4uAAt0EMearTkObAsO6xiXt4V');

$gambar = $url['results']['lists'][0]['list_image'];
$judulbuku = $url['results']['lists'][0]['books'][0]['title'];
$publisher = $url['results']['lists'][0]['books'][0]['publisher'];
$tanggalupdate = $url['results']['lists'][0]['books'][0]['updated_date'];
$author = $url['results']['lists'][0]['books'][0]['author'];
$rank = $url['results']['lists'][0]['books'][0]['rank'];

$gambar2 = $url['results']['lists'][1]['list_image'];
$judulbuku2 = $url['results']['lists'][1]['books'][0]['title'];
$publisher2 = $url['results']['lists'][1]['books'][0]['publisher'];
$tanggalupdate2 = $url['results']['lists'][1]['books'][0]['updated_date'];
$author2 = $url['results']['lists'][1]['books'][0]['author'];
$rank2 = $url['results']['lists'][1]['books'][1]['rank'];

$gambar3 = $url['results']['lists'][2]['list_image'];
$judulbuku3 = $url['results']['lists'][2]['books'][0]['title'];
$publisher3 = $url['results']['lists'][2]['books'][0]['publisher'];
$tanggalupdate3 = $url['results']['lists'][2]['books'][0]['updated_date'];
$author3 = $url['results']['lists'][2]['books'][0]['author'];
$rank3 = $url['results']['lists'][2]['books'][2]['rank'];

// $gambar4 = $url['results']['lists'][5]['list_image'];
// $judulbuku4 = $url['results']['lists'][5]['books'][0]['title'];
// $publisher4 = $url['results']['lists'][5]['books'][0]['publisher'];
// $tanggalupdate4 = $url['results']['lists'][5]['books'][0]['updated_date'];
// $author4 = $url['results']['lists'][5]['books'][0]['author'];
// $rank4 = $url['results']['lists'][5]['books'][4]['rank'];

$copyright = $url['copyright'];

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Web Service</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Tugas Web Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <!-- <img src="img/profile1.png" class="rounded-circle img-thumbnail"> -->
          <h1 class="display-4">Data Buku Best Seller</h1>
          <p>Versi The New York Times</p>
        </div>
      </div>
    </div>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Data Buku Best Seller</h2>
            <h6><?= $copyright; ?></h6>
            <a href="https://www.nytimes.com/books/best-sellers/" class="btn btn-primary btn-md" tabindex="-1" role="button" aria-disabled="true">Kunjungi Situs Resmi</a>
          </div>
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <div class="card-header">Rank : <?= $rank; ?></div>
              <img class="card-img-top" src="<?= $gambar; ?>" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Judul Buku : <?= $judulbuku; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Publisher : <?= $publisher; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Tanggal Update : <?= $tanggalupdate; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Author : <?= $author; ?></h6>
                <a href="#" class="card-link">Beli</a>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <div class="card-header">Rank : <?= $rank2; ?></div>
              <img class="card-img-top" src="<?= $gambar2; ?>" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Judul Buku : <?= $judulbuku2; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Publisher : <?= $publisher2; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Tanggal Update : <?= $tanggalupdate2; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Author : <?= $author2; ?></h6>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <div class="card-header">Rank : <?= $rank3; ?></div>
              <img class="card-img-top" src="<?= $gambar3; ?>" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Judul Buku : <?= $judulbuku3; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Publisher : <?= $publisher3; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Tanggal Update : <?= $tanggalupdate3; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Author : <?= $author3; ?></h6>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

</section>

    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p><?= $copyright; ?></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>
