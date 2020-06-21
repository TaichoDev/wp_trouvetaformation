<?php
    /**
     * Template Name: Page Formations
     * Template Post Type: page
     */
?>


<?php

    get_header(); ?>
    
    <section class="section-formation-list container">
    <h2 class="section-formation-list-title">
 
        Liste des <?= get_queried_object()->post_title ?>
    </h2>
    <div class="grid-list"> <?php 
                $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
                $homePageFormations = new WP_Query(array(
                    'posts_per_page' => 9,
                    'post_type' => get_queried_object()->post_name,
                    'paged' => $paged,
                    'orderby' => 'ID',
    'order'   => 'DESC',
                ));

                if ($homePageFormations->have_posts()){
                    while($homePageFormations->have_posts()) : the_post();            
                            $homePageFormations->the_post();            
                            // meme role que require/ include
                            
                            get_template_part('template/card');
                    endwhile;
                } 
            ?>
    </div>
    </section>
    <section class="contenaire-pagination ">
            <div class="pagination">
<?php
$big = 999999999; // need an unlikely integer
 
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $homePageFormations->max_num_pages
) );



?>
            </div>
    </section>
<?php
    
    get_footer(); 
?>
