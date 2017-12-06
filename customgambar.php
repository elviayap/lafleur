<?php require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>La Fleur Patisserie</title> 
    <!-- end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: Facebook Open Graph -->
  <meta property="og:title" content=""/>
  <meta property="og:description" content=""/>
  <meta property="og:type" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:image" content=""/>
  <!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
  <!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
  <?php include "header.php"; ?>
  
  <!-- start: Slider -->
  <div id="page-title">

    <div id="page-title-inner">

      <!-- start: Container -->
      <div class="container">

        <h2><i class="ico-stats ico-white"></i>Custom Desain Anda</h2>

      </div>
      <!-- end: Container  -->

    </div>  

  </div>
  <!-- end: 
  <!-- end: Slider -->
      
  <!--start: Wrapper-->
  <div id="wrapper">
        
    <!--start: Container -->
      

  <div id="wrapper">
        
    <!--start: Container -->
      <div class="container">
  
          <!-- start: Hero Unit - Main herounit for a primary marketing message or call to action -->

            
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
      <!-- end: Hero Unit -->

          <!-- start: Row -->
            
          
      <!-- end: Row -->
          
    <!--  <hr>
    
      <!-- start Clients List --> 
    <!--  <div class="clients-carousel">
    
        <ul class="slides clients">
          <li><img src="img/logos/1.png" alt=""/></li>
          <li><img src="img/logos/2.png" alt=""/></li>  
          <li><img src="img/logos/3.png" alt=""/></li>
          <li><img src="img/logos/4.png" alt=""/></li>
          <li><img src="img/logos/5.png" alt=""/></li>
          <li><img src="img/logos/6.png" alt=""/></li>
          <li><img src="img/logos/7.png" alt=""/></li>
          <li><img src="img/logos/8.png" alt=""/></li>
          <li><img src="img/logos/9.png" alt=""/></li>
          <li><img src="img/logos/10.png" alt=""/></li>   
        </ul>
    
      </div>
      <!-- end Clients List -->
<?php
if(isset($_POST['input'])){
$namafolder="gambar_produk/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
  $jenis_gambar=$_FILES['nama_file']['type'];
        $kode       = $_POST['kode'];
    $nama       = $_POST['nama'];
    $jenis      = $_POST['jenis'];
        $harga      = $_POST['harga'];
        $keterangan = $_POST['keterangan'];
        $stok       = $_POST['stok'];
      
  if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
  {     
    $gambar = $namafolder . basename($_FILES['nama_file']['name']);   
    if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
      $sql="INSERT INTO produk(kode,nama,jenis,harga,keterangan,stok,gambar) VALUES
            ('$kode','$nama','$jenis','$harga','$keterangan','$stok','$gambar')";
	
  
      $res=mysqli_query($koneksi, $sql and $query) or die (mysqli_error());
      //echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data Produk berhasil dimasukan!'); window.location = 'produk.php'</script>";    
    } else {
       echo "<p>Gambar gagal dikirim</p>";
    }
   } else {
    echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
  echo "Anda belum memilih gambar";
}
}


      ?>
           <!-- /.row -->
                    <br />
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                        
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="index.html" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <table class="table table-hover table-striped">
						  <tr>
                            <td><label class="col-sm-2 col-sm-2 control-label">Name </label></td>
							<td> <input name="nama" type="text" id="nama" class="form-control" autocomplete="off" placeholder="Nama Anda" autocomplete="off" required />
                           </td>
                            </tr>
                          <tr>
                          <td>
                              <label class="col-sm-2 col-sm-2 control-label">Address</label>
                              </td><td>
                            <input name="alamat" type="text" id="alamat" class="form-control" autocomplete="off" placeholder="Alamat" autocomplete="off" required />
                              </td>
                            </tr>
                          <tr>
                          <td>
                              <label class="col-sm-2 col-sm-2 control-label">No.HP</label>
                              </td>
                              <td>
                             <input name="nohp" type="text" id="nohp" class="form-control" autocomplete="off" placeholder="No.HP" autocomplete="off" required />
                            </td>
                          </tr>
                        <tr>
                              <td>
                            <label class="col-sm-2 col-sm-2 control-label">Size</label>
                              </td>
                              <td>
                            <select id="size" name="size" class="form-control" required>
                            <option value="S">30x30</option>
                            <option value="M">40x40</option>
                            <option value="L">50x50</option>
                            <option value="XL">100x100</option>
                            
                            </select>
                              
                            </td>
                          </tr>
                          <tr>
                          <td>
                              <label class="col-sm-2 col-sm-2 control-label">Color</label>
                          </td>
                          <td>
                            <select id="color" name="color" class="form-control" required>
                            <option value="black">Black</option>
                            <option value="dark blue">Dark Blue</option>
                            <option value="red">Red</option>
                            <option value="grey">Grey</option>
                            <option value="white">White</option>
                            </select>
                            </td>
                            </tr>
                            <tr>
                          <td>
                              <label class="col-sm-2 col-sm-2 control-label">Model</label>
                              </td>
                              <td>
                            <select id="model" name="model" class="form-control" required>
                            <option value="short">1 tingkat</option>
                            <option value="long">2 tingkat</option>
                            
                            </select>
                          </td>
                          </tr>
                          <tr>
                         <td>
                              <label class="col-sm-2 col-sm-2 control-label">Gambar Custom</label>
                         </td>
                         <td>
                            <input name="myFile" type="file" id="myFile" class="form-control" required />
                           </td>
                          </tr>
                         <tr>
                         <td>
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              </td>
                              <td>
                                  <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                <a href="index.php" class="btn btn-sm btn-danger">Batal </a>
                             </td>
                         </tr>
                           </table>
                      </form>
                  </div>
                  </div>
                  </div>
              </div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

      
      
    </div>
    </div>
    <!--end: Container-->
  
  </div>
  <!-- end: Wrapper  -->      

    

        

        
      
      </div>
      <!-- end: Row -->
      
    </div>
    <!-- end: Container  -->  

  </div>  
  <!-- end: Footer Menu -->
<?php include "footer.php"; ?>

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>