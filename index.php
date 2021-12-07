<!doctype html>


<?php 
include "includes/config.php";
$query = mysqli_query($connection, "SELECT * FROM fotohotel");
$query1 = mysqli_query($connection, "SELECT * FROM fotorestaurant");

$destinasi = mysqli_query($connection, 
"SELECT * FROM kategori, destinasi, fotodestinasi
WHERE kategori.kategoriID = destinasi.kategoriID   
AND destinasi.destinasiID = fotodestinasi.destinasiID
");    

$sql = mysqli_query($connection, "SELECT * FROM destinasi");
$jumlah = mysqli_num_rows($sql);

$sql1 = mysqli_query($connection, "SELECT * FROM fotohotel");
$jumlah1 = mysqli_num_rows($sql1);

$sql2 = mysqli_query($connection, "SELECT * FROM fotorestaurant");
$jumlah2 = mysqli_num_rows($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM kabupaten");
$jumlah3 = mysqli_num_rows($sql3);

$sql4 = mysqli_query($connection, "SELECT * FROM kecamatan");
$jumlah4 = mysqli_num_rows($sql4);

$sql5 = mysqli_query($connection, "SELECT * FROM provinsi");
$jumlah5 = mysqli_num_rows($sql5);

$foto = mysqli_query($connection, "SELECT * FROM fotohotel");
$foto1 = mysqli_query($connection, "SELECT * FROM fotorestaurant");

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="footer.css" type="text/css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Indonesia</title>
  </head>
  <body>
    <!-- Membuat Menu -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: orange;">
  <a class="navbar-brand">Indonesia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Galeri Foto Hotel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <?php if(mysqli_num_rows($query) > 0) {
               while($row = mysqli_fetch_array($query))
           {?> 
          <a class="dropdown-item" href="#<?php echo $row["fotonama"]?>"><?php echo $row["fotonama"]?></a>
          <?php } } ?>  
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Galeri Foto Restaurant
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <?php if(mysqli_num_rows($query1) > 0) {
               while($row = mysqli_fetch_array($query1))
           {?> 
          <a class="dropdown-item" href="#<?php echo $row["fotonama"]?>"><?php echo $row["fotonama"]?></a>
          <?php } } ?>  
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../UAS_PHP/index.php">Event<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- Akhir Menu -->

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h1>Indonesia</h1>
            <p>Butuh Refreshing Langsung Aja Kesini</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
            <h1>Indonesia</h1>
            <p>Butuh Refreshing Langsung Aja Kesini</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
            <h1>Indonesia</h1>
            <p>Butuh Refreshing Langsung Aja Kesini</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Akhir slider --> 

    <!-- membuat tampilan obyek -->
 

    <!-- end -->
    <div class="container-fluid" style="background-color: black;">
      <div class="container">
        <div class="row">
            <div class="col-sm-8" style="margin-top: 20px; border-radius:5px; margin-bottom: 40px; background-color:orange">
                      <div class="card-body">
                      <h3 class="text-center mt-2">Daftar destinasi</h3>
                    <?php 
                      $jumlahtampilan = 3;
                      $halaman =(isset($_GET['page'])) ? $_GET['page'] :1;
                      $mulaitampilan = ($halaman-1) * $jumlahtampilan;

                      $query = mysqli_query($connection, "SELECT * from destinasi");
                      $jumlahrecord = mysqli_num_rows($query);
                      $jumlahpage = ceil($jumlahrecord/$jumlahtampilan);

                      $destinasiData = mysqli_query($connection,"SELECT kategori.kategoriketerangan,destinasi.destinasialamat,fotodestinasi.fotonama,fotodestinasi.fotofile,
                      kabupaten.kabupatennama,kecamatan.kecamatannama,provinsi.provinsinama
                      FROM kategori,destinasi,fotodestinasi,area,kabupaten,kecamatan,provinsi
                      WHERE kategori.kategoriID = destinasi.kategoriID AND
                      destinasi.destinasiID = fotodestinasi.destinasiID AND
                      destinasi.areaID = area.areaID AND
                      area.kabupatenID = kabupaten.kabupatenID AND
                      area.kecamatanID = kecamatan.kecamatanID AND
                      area.provinsiID = provinsi.provinsiID
                      limit $mulaitampilan, $jumlahtampilan");  
                  ?>

                    <?php while($row2 = mysqli_fetch_array($destinasiData)){ 
                      $img_pic = $row2['fotofile'];
                      ?>
                     <div class="media">
                          <div class="media-body" style="padding-bottom:1px;">
                              <h4 class="mx-3 mt-3"><span style="font-weight: bold;">Nama : </span><?php echo $row2["fotonama"] ?></h4>
                              <h6 class="mx-3 my-1"><span style="font-weight: bold;">Alamat : </span><?php echo $row2["destinasialamat"];?></h6>
                              <p class="mx-3 my-1"><span style="font-weight: bold;">Keterangan : </span><?php echo $row2["kategoriketerangan"];?></p>
                              <p class="mx-3 my-1"><span style="font-weight: bold;">Kabupaten : </span><?php echo $row2["kabupatennama"];?></p>
                              <p class="mx-3 my-1"><span style="font-weight: bold;">Kecamatan : </span><?php echo $row2["kecamatannama"];?></p>
                              <p class="mx-3 my-1"><span style="font-weight: bold;">Provinsi : </span><?php echo $row2["provinsinama"];?></p>
                          </div>
                          <img class="mx-4 mt-4 pb-2" style="width:175px; height:100%;" src="images/<?php echo $img_pic?>" alt="Gambar tidak ada">
                      </div>
                      <?php } ?>

                      <nav aria-label="Page navigation example" class="float-right">
                        <ul class="pagination ml-4 mt-4">
                        <li class="page-item"><a class="page-link" href="?page=<?php $nomorhal=1; echo $nomorhal?>">Prev</a></li>
                        <?php for($nomorhal=1; $nomorhal<=$jumlahpage; $nomorhal++) { ?>
                        <li class="page-item">
                              <?php 
                                  if($nomorhal != $halaman){
                              ?>
                                <a class="page-link" href="?page=<?php echo $nomorhal?>">
                                        <?php echo $nomorhal;?></a>
                              <?php } 
                              else { ?>
                              <a class="page-link" href="?page=<?php echo $nomorhal?>">
                                      <?php echo $nomorhal;?></a>
                             <?php } ?>
                        </li>
                        <?php } ?>
                          <li class="page-item"><a class="page-link" href="?page=<?php echo $nomorhal-1?>">Next</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                  <div class="col-sm-4" style="margin-top: 20px;">
                    <ul class="list-group">
                      <a><li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: orange; color:black;">
                        Jumlah Obyek Wisata

                        <span class="badge badge-dark badge-pill"><?php echo $jumlah?></span>
                      </li></a>
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: orange; color:black;">
                      Jumlah Galeri Foto Hotel
                        <span class="badge badge-dark badge-pill"><?php echo $jumlah1?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: orange; color:black;">
                      Jumlah Galeri Foto Restaurant
                        <span class="badge badge-dark badge-pill"><?php echo $jumlah2?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: orange; color:black;">
                      Jumlah Kabupaten
                        <span class="badge badge-dark badge-pill"><?php echo $jumlah3?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: orange; color:black;">
                      Jumlah Kecamatan
                        <span class="badge badge-dark badge-pill"><?php echo $jumlah4?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: orange; color:black;">
                      Jumlah Provinsi
                        <span class="badge badge-dark badge-pill"><?php echo $jumlah5?></span>
                      </li>
                    </ul>
                    <iframe width="400" height="315" src="https://www.youtube.com/embed/feoRIr5MNHM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-top:40px; border: 5px solid orange"></iframe>
                  </div>
              </div>
            </div>
          </div>    
    
     <!-- Galeri -->
<div class="" style="background-color: black;">
    <div class="container">
    <div class="col-sm-12" style="margin-top: -10px; border-radius:5px; background-color:orange;">
    <h3 class="text-center mt-2">Daftar Galeri Foto Hotel</h3>
    <div class ="row">

    <?php while ($row3 = mysqli_fetch_array($foto))
    {?>
    <div class="col-sm-4">
    <figure class="figure">
  <img src="images/<?php echo $row3["fotofile"]?>" class="figure-img img-fluid rounded" alt="gambar tidak ada" id="<?php echo $row3["fotonama"]?>">
  <figcaption class="figure-caption text-right" style="color: black;"><?php echo $row3["fotonama"]?></figcaption>
</figure>
</div>
<?php } ?>
<p style="margin-left: 20px;">
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    More
  </a>
</p>

<?php $keterangan = mysqli_query($connection, "SELECT restaurantketerangan FROM restaurant")?>
<?php while($row3 = mysqli_fetch_array($keterangan)){ 
?>
<div class="collapse" id="collapseExample">
  <div class="card card-body" style="background-color: orange;">
  <h5 class="mx-3 my-1">Keterangan</h5>
  <p class="mx-3 my-2"><?php echo $row3["restaurantketerangan"];?></p>
  </div>
</div>
<?php } ?>

</div>
</div>
</div>
<!-- End Galeri -->
  </body>

<footer class="text-center text-white" style="background-color: orange; margin-top:20px">
  <!-- Grid container -->
  <div class="container p-3">
    <!-- Section: Images -->
    <div class="col-sm-12" style="margin-top: -10px; border-radius:5px; background-color:orange;">
    <h3 class="text-center mt-2" style="color: black;">Restaurants</h3>
    <div class = "row">

    <?php while ($row4 = mysqli_fetch_array($foto1))
    {?>
    <div class="col-sm-2">
    <figure class="figure">
    <img src="images/<?php echo $row4["fotofile"]?>" class="figure-img img-fluid rounded" alt="gambar tidak ada" id="<?php echo $row4["fotonama"]?>">
  <figcaption class="figure-caption text-right" style="color: black;"><?php echo $row4["fotonama"]?></figcaption>
</figure>
</div>
<?php } ?>

</div>
</div>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: black">
    © 2021 Copyright :
    <a class="" style="color: orange;" href="index.php">Template StevenCang</a>
  </div>
  <!-- Copyright -->
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>