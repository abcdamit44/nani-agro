<?php 
include "include/metatags.php"; 
include "include/header.php"; 
?>

<!-- <section class="hometop_banner"> -->
	<!-- <div class="container">
		<div class="row m-0">
			<div class="banner-text">
			    
			    <div class="frst-p">
					
					<a href="#" class="text-decoration-underline text-warning">Know More</a>
				</div>
			</div>
		</div>
	</div>	 -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="hometop_banner" style="background: url('images/home/Bannner-bg.jpg')"> 
                    <div class="container">
                         <div class="row m-0 justify-content-center align-items-center flex-column" style="background: url('images/home/Bannner.jpg')">
                            <p class="display-4 text-warning text-uppercase">Great Taste Knows</p>
                            <p class="display-4 text-white text-uppercase">No Boundaries</p>
                            <a href="products.php" class="btn btn-outline-warning px-3 py-2 text-white" class="text-decoration-underline text-warning">Know More</a>
                        </div>
                    </div>
                <section>
            </div>
            <div class="carousel-item">
                           <section class="hometop_banner" style="background: url('images/home/Bannner-bg.jpg')"> 
                    <div class="container">
                        <div class="row m-0 justify-content-center align-items-center flex-column" style="background: url('images/home/Bannner.jpg')">
                            <p class="display-4 text-warning text-uppercase">Great Taste Knows</p>
                            <p class="display-4 text-white text-uppercase">No Boundaries</p>
                            <a href="products.php" class="btn btn-outline-warning px-3 py-2 text-white" class="text-decoration-underline text-warning">Know More</a>
                        </div>
                    </div>
                <section>
            </div>
            <div class="carousel-item">
                <section class="hometop_banner" style="background: url('images/home/Bannner-bg.jpg')"> 
                    <div class="container">
                        <div class="row m-0 justify-content-center align-items-center flex-column" style="background: url('images/home/Bannner.jpg')">
                            <p class="display-4 text-warning text-uppercase">Great Taste Knows</p>
                            <p class="display-4 text-white text-uppercase">No Boundaries</p>
                            <a href="products.php" class="btn btn-outline-warning px-3 py-2 text-white" class="text-decoration-underline text-warning">Know More</a>
                        </div>
                    </div>
                <section>
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
<!-- </section> -->

<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			    <div class="about-img">
				    <img class="about-img1" src="images/home/img-1.jpg" alt="img">
					<img class="about-img2" src="images/home/img-2.jpg" alt="img">
				</div>
			</div>
			<div class="col-md-6">
			    <div class="about-text">
					<div class="about-hed">
					    <h1 class="fs-40">ABOUT US</h1>
					</div>
					<div class="about-spices">
					    <h2>Spices are to food</h2>
						<p>what the soul is to the body.</p>
					</div>
                    <div class="about-p">
					    <p>
							Great tasting food is no accident: it is a painstaking journey. blending just the right ingredients in the right proportion to create that delightful interplay of flavors that gives our dishes their identity, this tradition of  great taste is something that has been passed on from generation to generation, and it is something that we at Nani Agro have inherited. 
						</p>
                        <a href="about.php" class="btn btn-outline-danger font-weight-bold mt-4">Read More</a>
                    </div>
                </div>					
			</div>
		</div>
	</div>
</section>

<section class="our-section">
    <div class="container">
	    <div class="our-hed about-hed">
		    <h1 class="fs-40">OUR PRODUCTS</h1>
		</div>
		<div class="our-detal">
			<ul class="nav nav-pills mb-3 d-flex justify-content-center align-items-center" id="pills-tab" role="tablist">
			<li class="mx-4" role="presentation">
				<a class="nav-link  text-dark font-weight-bold active" id="spice-powder-tab" data-toggle="pill" href="#turmeric" role="tab" aria-controls="turmeric" aria-selected="true">Turmeric</a>
			</li>
			<li class="mx-4" role="presentation">
				<a class="nav-link  text-dark font-weight-bold" id="chillies-tab" data-toggle="pill" href="#chillies" role="tab" aria-controls="chillies" aria-selected="false">Chillies</a>
			</li>
			<li class="mx-4" role="presentation">
				<a class="nav-link  text-dark font-weight-bold" id="black-white-pepper-tab" data-toggle="pill" href="#black-white-pepper" role="tab" aria-controls="black-white-pepper" aria-selected="false">Black & White Pepper</a>
			</li>
			<li class="mx-4" role="presentation">
				<a class="nav-link  text-dark font-weight-bold" id="ginger-tab" data-toggle="pill" href="#ginger" role="tab" aria-controls="ginger" aria-selected="false">Ginger</a>
			</li>
			<li class="mx-4" role="presentation">
				<a class="nav-link  text-dark font-weight-bold" id="whole-spices-tab" data-toggle="pill" href="#whole-spices" role="tab" aria-controls="whole-spices" aria-selected="false">Whole Spices</a>
			</li>
			<li class="mx-4" role="presentation">
				<a class="nav-link  text-dark font-weight-bold" id="mixed-whole-spices-tab" data-toggle="pill" href="#mixed-whole-spices" role="tab" aria-controls="mixed-whole-spices" aria-selected="false">Mixed Spices Whole</a>
			</li>
			<li class="mx-4" role="presentation">
				<a class="nav-link  text-dark font-weight-bold" id="pills-test-tab" data-toggle="pill" href="#ground-spices" role="tab" aria-controls="ground-spices" aria-selected="false">Ground Spices</a>
			</li>
			<li class="mx-4" role="presentation">
				<a class="nav-link  text-dark font-weight-bold" id="spice-blends-tab" data-toggle="pill" href="#spice-blends" role="tab" aria-controls="spice-blends" aria-selected="false">Spice Blends</a>
			</li>
			<li class="mx-4">
				<a class="nav-link  text-dark font-weight-bold" href="products.php" >View All</a>
			</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="turmeric" role="tabpanel" aria-labelledby="turmeric-tab">
				<div class="row">
				<div class="col-md-6">
				    <div class="our-detal-hed">
					    <h4>Turmeric</h4>
						<p>Turmeric is a common Spice that comes from the root of Curcuma longa. This piece has a beta and bomb test and is frequently used in Indian dishes for its flavor or color. The spice contains a chemical known as curcumin which offers scores of health benefits as well. Nani chooses only the best quality turmeric from the harvesters and delivers it to the clients while maintaining all the standards.</p>
						<a href="turmeric.php" class="btn btn-outline-danger">Know More</a>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="our-img d-flex justify-content-center">
				       <img class="w-50 mt-5 mr-5 float-right " src="images/products/nani_agro_product_images/Turmaric.jpg" alt="img">
					</div>   
				</div>
			</div>	
			</div>
			<div class="tab-pane fade" id="chillies" role="tabpanel" aria-labelledby="chillies-tab">
				<div class="row">
				<div class="col-md-6">
				    <div class="our-detal-hed">
					    <h4>Chillies</h4>
						<p>Chilies are one of the largest produced spices in India. It's also one of the most important ingredients for various kinds of Indian dishes. The raw materials of all the chilly products that Nani offers are handpicked, graded and sorted by experts who follow all the international standards diligently. We pack the products in a hygienic environment according to customer specifications to maintain the standard of products every time.</p>
						<a href="chilli.php" class="btn btn-outline-danger">Know More </i></a>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="our-img d-flex justify-content-center">
				       <img class="w-50 mt-5 mr-5 float-right " src="images/products/nani_agro_product_images/Chilli.jpg" alt="img">
					</div>   
				</div>
			</div>	
			</div>
			<div class="tab-pane fade" id="black-white-pepper" role="tabpanel" aria-labelledby="black-white-pepper-tab">
				<div class="row">
				<div class="col-md-6">
				    <div class="our-detal-hed">
					    <h4>Black & White Pepper</h4>
						<p>Black paper is one of the most popular spices that is used by cooks all over the world. Both the white and black paper comes from the same plant species. But as they are processed in different ways, the taste and aesthetics differ from each other significantly. The experts of Nani only collect the supreme quality black paper from the harvesters and then process it in a controlled situation to produce high-quality white paper. We understand the demands of our customers and strive to meet their expectations by delivering the best quality black and white paper.</p>
						<a href="black_and_white_pepper.php" class="btn btn-outline-danger">Know More  </i></a>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="our-img d-flex justify-content-center">
				       <img class="w-50 mt-5 mr-5 float-right " src="images/products/nani_agro_product_images/Black&White-pepper.jpg" alt="img">
					</div>   
				</div>
			</div>	
			</div>
			<div class="tab-pane fade" id="ginger" role="tabpanel" aria-labelledby="ginger-tab">
				<div class="row">
				<div class="col-md-6">
				    <div class="our-detal-hed">
					    <h4>Ginger</h4>
						<p>Ginger is one of the most popular spices that are used universally. However, the use of ginger in dishes is more prominent in certain countries, like India, than in others. Spice is used in various forms to give the dish a unique taste. Nani supplies only top-quality Ginger to the clients while maintaining international standards. Check our website to find Ginger products.</p>
						<a href="ginger.php" class="btn btn-outline-danger">Know More  </i></a>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="our-img d-flex justify-content-center">
				       <img class="w-50 mt-5 mr-5 float-right " src="images/products/nani_agro_product_images/Ginger.jpg" alt="img">
					</div>   
				</div>
			</div>	
			</div>
			
			<div class="tab-pane fade" id="whole-spices" role="tabpanel" aria-labelledby="whole-spices-tab">
				<div class="row">
				<div class="col-md-6">
				    <div class="our-detal-hed">
					    <h4>Whole Spices</h4>
						<p>Apart from adding flavor and Aroma to various dishes, whole spices also offer an extensive range of health benefits. India is the hub of a wide assortment of whole spices in the world. Nani presents baskets of high-quality whole spices to win the hearts of our buyers across the world. From coriander, turmeric to Red Chilies and black and white paper, Nani adds to the cap of ordination as the best whole spices dealers and exporters in India. Only concentrate on offering our clients the best quality spices and meeting their needs without fail.</p>
						<a href="whole_spices.php" class="btn btn-outline-danger">Know More  </i></a>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="our-img d-flex justify-content-center">
				       <img class="w-50 mt-5 mr-5 float-right " src="images/products/nani_agro_product_images/whole-spices.jpg" alt="img">
					</div>   
				</div>
			</div>	
			</div>
			
			<div class="tab-pane fade" id="mixed-whole-spices" role="tabpanel" aria-labelledby="mixed-whole-spices-tab">
				<div class="row">
				<div class="col-md-6">
				    <div class="our-detal-hed">
					    <h4>Mixed Spices Whole</h4>
						<p>As the name suggests, Mixed Spice is a balanced product that is created by mixing various kinds of whole spices. Nani offers a carefully balanced mix of various whole spices that bring out the flavor of Indian dishes beautifully. We try to reach the balanced ratio of all the spices that satisfies the requirements of our clients easily.</p>
						<a href="mixed_spices_whole.php" class="btn btn-outline-danger">Know More  </i></a>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="our-img d-flex justify-content-center">
				       <img class="w-50 mt-5 mr-5 float-right " src="images/products/nani_agro_product_images/Mixed-whole-spices.jpg" alt="img">
					</div>   
				</div>
			</div>	
			</div>
			
			<div class="tab-pane fade" id="ground-spices" role="tabpanel" aria-labelledby="ground-spices-tab">
				<div class="row">
				<div class="col-md-6">
				    <div class="our-detal-hed">
					    <h4>Ground Spices</h4>
						<p>Nani is a stalwart in the export markets of ground spices. With the help of our modern technology and hygienic practices, we make sure that all the ground Spice pictures are created meticulously so that it brings out the perfect harmony of flavor to your dishes.</p>
						<a href="ground_spices.php" class="btn btn-outline-danger">Know More  </i></a>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="our-img d-flex justify-content-center">
				       <img class="w-50 mt-5 mr-5 float-right " src="images/products/nani_agro_product_images/Ground-Spices.jpg" alt="img">
					</div>   
				</div>
			</div>	
			</div>
			
			<div class="tab-pane fade" id="spice-blends" role="tabpanel" aria-labelledby="spice-blends-tab">
				<div class="row">
				<div class="col-md-6">
				    <div class="our-detal-hed">
					    <h4>Spice Blends</h4>
						<p>Spice blends are something that is created to bring out Aroma and flavor to the dishes that suit your preferences perfectly. As one of the biggest Spice traders in the country, Nani offers a range of Spice blends that enhance the taste of the dishes. We directly work with the harvesters to ensure the consistency of the quality of our dishes. Check our Web Store to see the assortment of Spice blends we offer.</p>
						<a href="spice_blends.php" class="btn btn-outline-danger">Know More  </i></a>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="our-img d-flex justify-content-center">
				       <img class="w-50 mt-5 " src="images/products/nani_agro_product_images/Chilli.jpg" alt="img">
					</div>   
				</div>
			</div>	
			</div>

			</div>
		</div>	
    </div>	
</section>

<section class="facta-section">
    <div class="container">
	    <div class="row">
		   <div class="col-md-6">
		       <div class="about-hed">
					<h1 class="fs-40 text-uppercase">Our Strength</h1>
				</div>
				<div class="facta-text">
				    <p>500,000+ square feet Production unit <br>
						135+ varieties of spices Herbs and seasoning <br>
						12+ Lakh’s retail packaging every day  <br>
						8 steam sterilization <br>
						NABL accreditation <br>
						300+ tons per day turmeric processing
					</p>
				</div>	 
		   </div>
		   <div class="col-md-6">
		       <div class="row">
			        <div class="col-md-6 p-0">
					    <div class="facta-box">
						    <img src="images/home/icon-2.png" alt="img">
							<h1>100+</h1>
							<h5>Lorem lpsum</h5>
						</div>	
					</div>
					<div class="col-md-6 p-0">
					     <div class="facta-box">
						    <img src="images/home/icon-1.png" alt="img">
							<h1>100+</h1>
							<h5>Lorem lpsum</h5>
						</div>
					</div>
				</div>	
		   </div>
		   <div class="col-md-3 p-0">
		       <div class="facta-box">
					<img src="images/home/icon-2.png" alt="img">
					<h1>100+</h1>
					<h5>Lorem lpsum</h5>
				</div>	
			</div>	
			<div class="col-md-3 p-0">
		       <div class="facta-box ">
					<img src="images/home/icon-2.png" alt="img">
					<h1>100+</h1>
					<h5>Lorem lpsum</h5>
				</div>	
			</div>	
			<div class="col-md-3 p-0">
		       <div class="facta-box ">
					<img src="images/home/icon-2.png" alt="img">
					<h1>100+</h1>
					<h5>Lorem lpsum</h5>
				</div>	
			</div>	
			<div class="col-md-3 p-0">
		       <div class="facta-box ">
					<img src="images/home/icon-2.png" alt="img">
					<h1>100+</h1>
					<h5>Lorem lpsum</h5>
				</div>	
			</div>	
		</div>
    </div>		
</section>

<section class="key-section">
    <div class="container">
	    <div class="our-hed about-hed">
		    <h1 class="fs-40">KEY SERVICES</h1>
		</div>
		<div class="row">
		    <div class="col-md-4">
			    <div class="key-detal">
					<div class="key-img">
						<a href="services.php" class="text-decoration-none"><img src="images/home/img-5.png" alt="img"></a>
					</div>	
					<div class="key-text">
					    <a href="services.php" class="text-decoration-none text-dark"><h5>Leaders in <br>All Kind of Turmeric</h5></a>
					</div>	
                </div>					
			</div>
			<div class="col-md-4">
			    <div class="key-detal">
					<div class="key-img">
						<a href="services.php" class="text-decoration-none"><img src="images/home/img-6.png" alt="img"></a>
					</div>	
					<div class="key-text">
					    <a href="services.php" class="text-decoration-none text-dark"><h5 class="pr-3">Expert in <br>Private Lable Packaging</h5></a>
					</div>	
                </div>					
			</div>
			<div class="col-md-4">
			    <div class="key-detal">
					<div class="key-img">
						<a href="services.php" class="text-decoration-none"><img class="key-limg" src="images/home/img-4.png" alt="img"></a>
					</div>	
					<div class="key-text">
					    <a href="services.php" class="text-decoration-none text-dark"><h5 class="pr-3">Master in <br>Spices Blending</h5></a>
					</div>	
                </div>					
			</div>
		</div>
	</div>
</section>

<section class="why-section">
	<div class="why-bg">
	    <div class="container">
			<div class="why-hed our-hed">
				<h1 class="fs-40">WHY NANI ?</h1>
			</div>
            <div class="row">
                <div class="col-md-3">
                    <div class="why-box">
					    <img src="images/home/icon-3.png" alt="img">
						<h5>Supreme <br> quality</h5>
						<p>Nani is Cognizant of the importance of purchasing Supreme quality products from the harvesters. We signed agreements with the vendors or harvesters to get the best quality raw materials.</p>
                    </div>
                </div>
				<div class="col-md-3">
                    <div class="why-box">
					    <img src="images/home/icon-4.png" alt="img">
						<h5>Certificates</h5>
						<p>By maintaining the quality of products consistently Nani has been able to secure several highly acclaimed national and international certificates that justify the standard of our products.</p>
                    </div>
                </div>
				<div class="col-md-3">
                    <div class="why-box">
					    <img src="images/home/icon-3.png" alt="img">
						<h5>State of the art laboratory</h5>
						<p>Our sophisticated laboratory corroborates our promise to our customers about delivering only the finest quality products.</p>
                    </div>
                </div>
				<div class="col-md-3">
                    <div class="why-box">
					    <img src="images/home/icon-4.png" alt="img">
						<h5>Hi-tech Packaging and labeling unit</h5>
						<p>Nani has one of the largest state-of-the-art packaging and labeling units in the country. We offer a wide range of packaging material to our customers from which they can take their pic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	

<section class="pres-section">
	<div class="our-hed about-hed">
		    <h1 class="fs-40">OUR PRESENCE</h1>
		</div>
    <div class="container">
        
	</div>
	<div class="d-flex justify-content-center">
		<ul>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Alaska (USA) </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Auckland </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Bangladesh </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Brazil </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Canada </li>
		</ul>
		<ul>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Germany </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Ghana </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Hong Kong </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> India </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Indonesia </li>
		</ul>
		<ul>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Italy </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Japan </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Malaysia </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Myanmar </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Nepal </li>
		</ul>
		<ul>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Netherlands </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Oman </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Poland </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Qatar </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Russia </li>
		</ul>
		<ul>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> South Africs </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Spain </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Sri Lanka </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Switzerland </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Tunisia </li>
		</ul>
		<ul>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Turkey </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> U.A.E. </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> Ukraine </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> United Kingdom </li>
			<li class="font-weight-bold my-3"><i class="fas fa-map-marker-alt"></i> U.S.A. </li>
		</ul>
	</div>
     
</section>	 

<section class="customer-section">
    <div class="customer-bg"> 
		<img class="customer-leftside" src="images/home/leaf.png" alt="img">

        <div class="container"><i class="fas fa-quote-left"></i>
            <div class="customer-detal">
                <div class="our-hed about-hed">
					<h1 class="fs-40 test-uppercase">Testimonials</h1>
				</div>
                <div class="customer-text">
						<div id="carouseltestimonial" class="carousel slide" data-ride="carousel">
						 <!-- <ol class="carousel-indicators">
							<li data-target="#carouseltestimonial" data-slide-to="0" class="active"></li>
							<li data-target="#carouseltestimonial" data-slide-to="1"></li>
							<li data-target="#carouseltestimonial" data-slide-to="2"></li>
						</ol>  -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<p>There is no doubt that Nani Delivers high-quality products we can stand behind. The professionals working in the company know to provide the best quality spices and other products. Nani has been a valuable partner that has helped us to maintain our reputation with our customers.</p>
								<h5>PANKAJ SHARMA</h5>
								<span>Company CEO</span>
							</div>
							<div class="carousel-item">
								<p>Nani is transforming the simple Spice business into a global journey of spices. The company sources some of the best quality spices from across India and creates balanced and precise blends for their customers. The company, its management, and the professionals working here are truly the masters of their craft.</p>
								<h5>Test Name</h5>
								<span>Company CEO</span>
							</div>
							<div class="carousel-item">
								<p>We have been doing business with money for more than 10 years, and the quality of their products has only gotten better with time. We love the quality of spices that Nani provides us. Nani is a company of passion and integrity for what they do, and they are the best in doing it. We are both lucky and proud to be associated with Nani..</p>
								<h5>Random Name</h5>
								<span>Company CEO</span>
							</div>
							<div class="carousel-item">
								<p>We have been associated with Nani for more than 8 years now, and it can easily be said that they can't be beaten in the freshness and quality of their products. Fostering creativity, the balance and aroma of their blends are unparalleled. Their pricing is always reasonable, and the communication is always excellent. Thanks to their smooth services, our small company has experienced significant growth in a very short time. We are very proud and pleased to be associated with Nani exclusively.</p>
								<h5>Random Name</h5>
								<span>Company CEO</span>
							</div>
							<div class="carousel-item">
								<p>The selection of spices and other food products that Nani offers is simply unbelievable. The company has every possible spice that you can ask for, and even more. You just need to communicate your requirements, and they take care of the rest of the problems on their own. We are thankful to be associated with a company like Nani.</p>
								<h5>Random Name</h5>
								<span>Company CEO</span>
							</div>
							<div class="carousel-item">
								<p>We love Nani because their spices are of high quality and flavorful. Not only that, their blends are creative and well-balanced. Timely delivery and Pocket-friendly pricing are the other two reasons why we chose Nanny over other companies.</p>
								<h5>Random Name</h5>
								<span>Company CEO</span>
							</div>
                        </div>
						  <a class="carousel-control-prev" href="#carouseltestimonial" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouseltestimonial" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
    				</div>
            	</div>
			</div>
        </div>
		
		<img class="customer-sidimg" src="images/home/5.png" alt="img">
    </div>
</section>	

<section class="update-section">
    <div class="container">
	    <div class="row">
		    <div class="col-md-6">
			    <div class="left-detal">
				    <div class="about-hed">
						<h1 class="fs-40">LATEST UPDATE</h1>
					</div>
					<div class="latest-text">
					    <img src="images/home/update-1.png" alt="img">
						<h5>Lorem lpsum Dummy text</h5>
						<p>Spices are to food what the soul is to the body. Great tasting food is no accident</p>
						<a href="" class="btn btn-outline-danger">Know More  </i></a>
					</div>
					<div class="latest-text">
					    <img src="images/home/update-2.png" alt="img">
						<h5>Lorem lpsum Dummy text</h5>
						<p>Spices are to food what the soul is to the body. Great tasting food is no accident</p>
						<a href="" class="btn btn-outline-danger">Know More  </i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
			    <div class="right-detal">
				    <div class="about-hed">
						<h1 class="fs-40">SPICE CALENDAR</h1>
					</div>
					<div class="latest-text latest-text1">
					    <img src="images/home/calander.png" alt="img">
						<p>An aromatic treat of goodness <br>
						The handpicked spice to enhance your dishes <br>
						Delivering some good mood to your every food <br>
						Capturing the flavors of life <br>
						A spoonful of Magic for a divine taste <br></p>
						<a href="spice-harvest-calendar.php" class="btn btn-outline-danger">Know More  </i></a>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>	

<section class="schedule-section">
    <div class="container">
	    <div class="row">
		    <div class="col-md-6">
			    <div class="schedule-text">
				    <h3>Schedule Your Discovery Call</h3>
					<p>Making a Discovery call is the first step of growing your business. Discovery calls are no strings attached 10 to 15 minutes long conversations that offer you a chance to ask all the necessary questions and allow us to understand your business goals perfectly. We will also discuss the services and products we offer and how they could benefit your business.</p>
					<div class="now">
					   <a href="https://calendly.com/naniagrofood/nani-agro-food" target="_blank">Let's talk</a>
					</div> 
				</div>
			</div>
			<div class="col-md-6">
			    <div class="schedule-img">
				    <img src="images/home/Discover-image.jpg" alt="img">
				</div>
			</div>
		</div>
    </div>
</section>	
			

<?php 
include "include/footer.php"; 
?>