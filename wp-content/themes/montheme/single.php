<?php

    get_header();
    
    ?>
<?php 

    if (have_posts()) : 
        while(have_posts()) : the_post(); ?>            
            <div class="container">
			    <div class="main-content">
			    	<?php 
				    	if (has_post_thumbnail()) {
	                        $url = the_post_thumbnail_url();
	                    } else {
	                    	$url = 'https://via.placeholder.com/300';
	                    }
	                ?>
	                <div class="container-img-page"> 
			        	<img src="<?php echo $url ?>" >
	                </div>
			        <h1><?php the_title(); ?></h1>
			        <p>
			        	<?php 
			                the_content();
			            ?>
			           
			        </p>
			    </div>
			</div>
        <?php endwhile;

    else : ?>    
        <h1> Pas d'articles </h1>

<?php endif; 

    get_footer();
?>