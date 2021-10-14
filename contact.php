<?php 
include "include/metatags.php"; 
include "include/header.php"; 
?>

<div class="main-container">
    <div class="about-section-1">
		<div class="container">
			<div class="about-header">
			    <h1>Contact</h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact</li>
				  </ol>
				</nav>
				
			</div>	
		</div>	
    </div>
</div>	

<section class="contact-section">
    <div class="container">
	    <div class="contact-bg">
		    <div class="row">
			    <div class="col-md-6 p-0 ">
				    <div class="form-box">
					    <div class="contact-hed">
							<h2>ENQUIRE NOW</h2>
						</div>
						<form class="get-contact-form" id="contact_form" name="contact_form" method="post">
							<input type="hidden" name="r_from" value="Contact Page Enquiry">
							<div class="row row-2">
								<div class="col-12">
									 <input type="text" class="form-control form-control_2" placeholder="Full Name" name="name" id="name" required="required">
								</div>
							</div>
							<div class="row row-2">
								<div class="col-12">
									 <input type="text" class="form-control form-control_2" placeholder="Email Address" name="name" id="name" required="required">
								</div>
							</div>
							<div class="row row-2">
								<div class="col-12">
									 <textarea rows="4" class="form-control form-control_2 form-control_0" placeholder="Message" name="message" id="message" required="required"></textarea>
								</div>
							</div>

							<div class="submit send-us">
								<button type="submit" class="btn button-box contact_form_submit">SUBMIT</button>
							</div>
							<div id="contact_form_msg_box" class="mt-3"></div>
						</form>
					</div>	
				</div>
				<div class="col-md-6 p-0 ">
				    <div class="contact-text shadow-lg">
					    <div class="map-img" style="background:#E53236">
						    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7827.428830006634!2d77.615402!3d11.208753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba9739d50f2ab57%3A0xe44081774b6c3edb!2sPerundurai%20R.S%20Chennimalai%20Road%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1629778209255!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="con-link">
						    <div class="contact-hed contact-hed1">
							   <h2>OFFICE ADDRESS</h2>
						    </div>
							<div class="add">
							    <p><i class="fas fa-map-marker-alt"></i> SF No.444. 1 to 5. Mukasi Pidariyur Village Pullapali Medu, R.S Road, Chennimalai Perundurai (TK) Erode - 638 051 Tamil Nadu, India. </p>
								<p class="mail-1"><a href="mailto:info@nani.co.in" title="info@nani.co.in"><i class="fas fa-envelope"></i> info@nani.co.in</a></p>
							    <p><a href="tel:+914242217126" title="+914242217126"><i class="fas fa-phone-alt"></i>91 424 221 7126</a></p>   
							 						
							</div>
						</div>
					</div>
                </div>					
			</div>
			
        </div>
    </div>
</section>	
	

		
			



<?php 
include "include/footer.php"; 
?>