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
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Macaron</h2>
				<p>Macaron is a sweet meringue-based confection characterized by smooth, squared top, ruffled circumference, and a flat base, mildly moist and easily melts in the mouth. The macaron is commonly filled with ganache, buttercream or jam filling sandwiched between two cookies. Our macaron size is ± 4.5cm. Best served in 5 days and have to be kept in chiller. Scroll below for our wide ranges of flavours, chocolate plaque greetings, wrappings, and pretty boxes </p>
				
				<div class="da-img"><img src="img/parallax-slider/salt.png" alt="image01" /></div>
				
			</div>
			<div class="da-slide">
				<h2>Cupcake</h2>
				<p>Cupcakes also known as fairy cake, is a small cake designed to serve one person, which is baked in a small thin paper or aluminum cup, icing and other cake decorations, such as candy, may be put at the top to beautify this tidbit! Best served in 3 days and have to be kept in chiller (below part refrigerator).</p>
				
				<div class="da-img"><img src="img/parallax-slider/love.png" alt="image03" /></div>
				
			</div>
			<div class="da-slide">
				<h2>Minicake</h2>
				<p>Want a cake all to yourself without having to share it? We’ve got the mini version for you! Each of our fullcake has the mini version ready in variance every day at our patisserie!</p>
				
				<div class="da-img"><img src="img/parallax-slider/redvelvet.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Cake</h2>
				<p>A form of dessert that is typically baked, often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays! All of our cakes are crafted with the finest ingredients from all over the world. Each and every one of them is passionately baked and decorated with utmost care, considering not only the taste but also the aesthetic elements of them. 
All cakes are not ready, have to be ordered 3-4 days before. But if you need it immediately, feel free to contact us and we’ll advise you further.
</p>
				
				<div class="da-img"><img src="img/parallax-slider/kookie.png" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
				Established in 2017, La Fleur is a passionate patisserie serving only fine and freshly baked artisanal pastries. The secret to our signature taste is pure and fresh ingredients, no artificial flavourings and preservatives added. We are proud to mention that our pastries are Halal (no pork), but some may contain dash of alcohol as flavourings. Let us know if you need any special food requirements, we will try our best to cater to your needs.
                </p>
        		
                                
      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
            
      		<div class="row">
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode DESC limit 6");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="admin/<?php echo $data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Details</a> <a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="clear"> <a href="index.html" class="btn btn-lg btn-success">Buy &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              
              
              ?>
<!---->
      		</div>
			<!-- end: Row -->
      		
		<!--	<hr>
		
			<!-- start Clients List -->	
		<!--	<div class="clients-carousel">
		
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
		
			
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    
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