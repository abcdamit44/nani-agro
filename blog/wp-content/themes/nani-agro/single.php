<?php get_header(); the_post() ?>



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
<div class="container mb-5 margin-bottom-large" style="margin-bottom:300px !important">
    <div class="row">
        <div class="col-md-8">
             <div class="display-3 text-center"><?php the_title() ?></div>

            <?php $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); ?>
            <div class="d-flex justify-content-center">
                <img src="<?php echo $imagePath[0] ?>" alt="<?php the_title() ?>" class="w-50 img-fluid">
            </div>
            <div class="d-flex justify-content-left">
                <p class="text-secondary font-weight-bold mx-3"><?php echo get_the_date() ?></p> 
                <!-- <p class="text-secondary font-weight-bold mx-3"><?php the_author() ?></p> -->
                <p class="text-secondary"><?php the_category() ?></p>
            </div>  
            <div class="d-flex justify-content-center">
                <p class="text-dark-gray mx-2 text-justify fs-18"><?php the_content() ?></p>
            </div>
            <p class="text-danger mx-3 text-justify"> <?php $tags = get_the_tags(get_the_ID());
                    foreach ($tags as $tag) {

                        ?>
                        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="text-danger font-weight-bold"><?php echo $tag->name." "; ?></a>

                        <?php
                    }
                 ?></p>
               
            </div>

        <div class="col-md-3 offset-1">
      <div class="card">
           <?php dynamic_sidebar('right_sidebar'); ?>
      </div>

        </div>
    </div>

       
        
</div>
<?php get_footer() ?>