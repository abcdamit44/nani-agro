<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $metaData["title"]; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="<?php echo $metaData["description"]; ?>" />
    <meta name="keywords" content="<?php echo $metaData["keyword"]; ?>">

    <!-- css -->
    <link rel="icon" href="images/Fav-icon.png" type="image/png" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
	
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

    <!-- Script -->
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
	
	

</head>

<body>


<!-- header start -->

<header>
    <div class="topnav">
	    <div class="container">
		   <div class="logo">
			   <ul>
					<li><p><i class="fas fa-envelope"></i>
						<a href="mailto:info@nani.co.in" title="info@nani.co.in"> info@nani.co.in</a></p>
					</li>
					<li>
						<p><i class="fas fa-phone-alt"></i>
						<a class="border-0" href="tel:+914242217126" title="+914242217126">+91 4242 2171 26</a></p>
					</li>
				</ul>	
				<a href="index.php">
					<img src="images/home/Header-logo.png">
				</a>
		  </div>
		  <div class="menu-sec">
				<div class="topmenu">
				    <div class="nav-search search-switch search-box">
					  <input class="search-input" type="text" name="" placeholder="">
					  <a href="#" class="search-btn">
						<i class="fas fa-search"></i>
					  </a> 			  
					</div>
					<ul>
				        <li class="dropdown">
							<!-- <a class="icon-arrow " href="#">English</a>
							<i class="fas fa-sort-down icon-arrow"></i> -->

							<!--<ul class="submenu">
								<li class="subOption"><a class="drop_a" href="#"></a></li>
							</ul>-->
                            <div id="google_translate_element"></div>
					    </li>
					</ul>				 							  
				</div>
			</div>
		</div>	
    </div>
  <div class="header">
    <div class="container">
	
      <nav class="menu">
		<div class="stickylogo">
			<a href="index.php">
				<img src="images/home/Header-logo.png">
			</a>
		</div>
        <ul>
          <!-- <li><a href="index.php">Home</a></li> -->
          <li><a href="about.php">About</a></li>
          <li class="nani_menu position-relative">
            <a class="nani_dropdown" href="products.php">Products <i class="fas fa-caret-down 2x"></i></a>
            <div class="position-absolute px-3 nani_dropdown_item product-dropdown" style="width:860px; left:-100px">
				
				<div class="px-2 my-2 product-dropdown-item w-25">	
					<a href="turmeric.php">Turmeric</a>
					<a href="chilli.php">Chillies</a>
					<a href="black_and_white_pepper.php">Black & White Pepper</a>
					<a href="ginger.php">Ginger</a>
					<a href="whole_spices.php">Whole Spices</a>
				</div>

				<div class="px-2 my-2 product-dropdown-item w-25">	
					<a href="mixed_spices_whole.php">Mixed Spices Whole</a>
					<a href="ground_spices.php">Ground Spices</a>
					<a href="spice_blends.php">Spice Blends</a>
					<a href="grinders.php">Grinders</a>
					<a href="miscellaneous.php">Miscellaneous</a>
				</div>

				<div class="px-2 my-2 product-dropdown-item w-25">	
					<a href="chana_products.php">Chana Products</a>
					<a href="dry_fruits_&_nuts.php">Dry Fruits & Nuts</a>
					<a href="tamrind_products.php">Tamrind Products</a>
					<a href="coconut_products.php">Coconut Products</a>
					<a href="delicacies.php">Delicacies</a>
				</div>

				<div class="px-2 my-2 product-dropdown-item w-25">						
					<a href="paapad.php">Pappad & Far Far Products</a>
					<a href="mouth_fresheners.php">Mouth Fresheners</a>
					<a href="jaggery.php">Jaggery</a>
					<a href="rice.php">Rice</a>
				</div>
			</div>
          </li>
		  <li class="nani_menu position-relative">
            <a href="services.php" class="nani_dropdown"> Services <i class="fas fa-caret-down 2x"></i></a>
				<div class="position-absolute px-3 nani_dropdown_item" style="width: 225px; left:-40px">
					<a href="https://hostmyweb.in/demo/nani-agro/services.php#turmaric">Turmeric Export</a>
					<a href="https://hostmyweb.in/demo/nani-agro/services.php#spice_food">Spice & Food Export</a>
					<a href="https://hostmyweb.in/demo/nani-agro/services.php#spice_processing">Spice Processing & Blending</a>
					<a href="https://hostmyweb.in/demo/nani-agro/services.php#packing_labelling">Packaging & Labelling</a>
				</div>
          </li>
          <li><a href="infrastructure.php">Infrastructure</a></li>
          <li><a href="sustainability.php">Sustainability</a></li>
		  <li class="nani_menu">
              <a href="quality_policy.php" class="nani_dropdown">Quality Policy <i class="fas fa-caret-down 2x"></i></a>
              <div class="position-absolute px-3 nani_dropdown_item">
                <a href="quality_policy.php">Quality Policy</a>
				<a href="certificates.php">Certificates</a>
			  </div>
          </li>
		  <li><a href="clients.php">Clients</a></li>
		  <li><a href="blog">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="hamburger"><span></span></div>
        <div class="dimmer"></div>
      </nav>
    </div>
  </div>
</header>


<!-- header End -->




