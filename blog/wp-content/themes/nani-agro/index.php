<?php get_header() ?>



<div class="main-container">
    <div class="about-section-1">
		<div class="container">
			<div class="about-header">
			    <h1>Blog</h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://hostmyweb.in/demo/nani-agro/index.php">Home</a></li>
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

      <div class="row mb-2" style="margin-bottom:5rem !important"> 
     
<?php 
while (have_posts()) { 
    the_post();
    ?>

<?php $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250 align-items-center">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php the_category( ) ?></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo get_the_date() ?></div>
              <p class="card-text mb-auto"><?php the_excerpt() ?></p>
              <a href="<?php the_permalink() ?>">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block w-50" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 200px;" src="<?php echo $imagePath[0] ?>">
          </div>
        </div>
       <?php } ?>

       <?php echo paginate_links() ?>
       <?php wp_reset_query(); ?>
      </div>
    </div>
    

<?php get_footer() ?>