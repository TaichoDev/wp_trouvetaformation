<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trouve ta formation</title>
        
    	<?php wp_head(); ?>

    </head>
<body>
    	<header class="header" role="navigation">
		    

		    	<?php the_custom_logo(); 
		    	
		    	wp_nav_menu([
		    	'theme_location' => 'header',
		    	'container_class' => 'header-nav']
		    );

		    	?>
		    
		</header>
        <main id="main-container">