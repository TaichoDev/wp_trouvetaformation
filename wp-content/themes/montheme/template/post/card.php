<a href="<?php the_permalink() ?>" class="card">
    <div class="card-media">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
        } else {?>
            <img src="https://via.placeholder.com/300" class="card-media-img responsive" alt=""  style="height: auto; width:100%" />
        <?php } ?>
    </div>
    <div class="card-content">
        <div class="card-title">
            <?php the_title() ?>
        </div>
            <!--<div class="card-subheead">
                {{ formation.company.name }}
            </div>-->
        <div class="card-text">
            <?php 
                $my_content = apply_filters( 'the_content', get_the_content() );
                $my_content = wp_strip_all_tags($my_content);
                echo wp_trim_words( $my_content, 15, $moreLink);
            ?>

        </div>    
    </div>
</a>