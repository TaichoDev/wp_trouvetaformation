<?php

    get_header();
    
    ?>
            <section class="section-formation-list container">
        <h2 class="section-formation-list-title">Liste des formations Home</h2>
        <div class="grid-list">
<?php 

    if (have_posts()) : 
        while(have_posts()) : the_post(); ?>
    
    


    <?php get_template_part('template/card') ?>

        
        <?php endwhile;

    else : ?>    
        <h1> Pas d'articles </h1>

<?php endif; ?>

        </div>
    </section> <?php
    get_footer(); ?>
