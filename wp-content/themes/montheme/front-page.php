<?php get_header(); ?>


    <section class="section-formation-list container">
        <h2 class="section-formation-list-title">
     
            Dernières formations 
        </h2>
        <div class="grid-list">
          

            <?php 
                $homePageFormations = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'formations'
                ));


                if ($homePageFormations->have_posts()){
                    while($homePageFormations->have_posts()) : the_post();            
                            $homePageFormations->the_post();            
                            // meme role que require/ include
                            
                            get_template_part('template/post/card');
                    endwhile;
                } 
            ?>
        </div>
        <h2 class="section-formation-list-title">
     
            Dernières Actualités 
        </h2>
        <div class="grid-list">

            <?php 
                $homePageActualite = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'actualites'
                ));

                

                if ($homePageActualite->have_posts()){
                    while($homePageActualite->have_posts()) : the_post();            
                            $homePageActualite->the_post();            
                            // meme role que require/ include
                            
                            get_template_part('template/post/card');
                    endwhile;
                } 
            ?>
        </div>
            <h2 class="section-formation-list-title">
     
                Dernière Offres 
            </h2>
        <div class="grid-list"> 

            <?php 
                $homePageOffer = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'offers'
                ));
              
                if ($homePageOffer->have_posts()){
                    while($homePageOffer->have_posts()) : the_post();            
                            $homePageOffer->the_post();            
                            // meme role que require/ include
                            
                            get_template_part('template/post/card');
                    endwhile;
                } 
            ?>
        </div>
    </section> 
<?php get_footer(); ?>