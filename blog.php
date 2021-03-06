<?php 
include "include/metatags.php"; 
include "include/header.php"; 
?>
<div class="main-container">
    <div class="about-section-1">
		<div class="container">
			<div class="about-header">
			    <h1>Blog</h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="index.php">Resources</a></li>
					<li class="breadcrumb-item active" aria-current="page">Blog</li>
				  </ol>
				</nav>
				
			</div>	
		</div>	
    </div>
</div>	
<div class="container mb-5 margin-bottom">
    <div class="jumbotron p-3 p-md-5 text-white rounded" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('https://source.unsplash.com/1600x900/?food,food'); opacity:0.8">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="https://source.unsplash.com/1600x900/?nature,streetfood">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="https://source.unsplash.com/1600x900/?nature,indianfood" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
</div>

<?php 
include "include/footer.php"; 
?>