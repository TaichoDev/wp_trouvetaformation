<?php 
 
    /***
     *  DECLARATION FUNCTIONS
     */
    //Permet de  charger tout les styles css
    function montheme_assets_style(){
        wp_enqueue_style('mon_theme_css', get_template_directory_uri().'/assets/dist/css/style.css');
       
    }
    //Permet de charger tout les fichiers js
    function montheme_assets_js(){
        wp_enqueue_script('ttf_main_styles', get_template_directory_uri().'/assets/dist/js/app.js',[]/* Dépendances necessaire pour le fichier */,false,true);
    }
 
    
    function montheme_support(){
        
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
       
        /**
         * Gestion du menu
         */
        //Permet d'ajouter un menu 
        add_theme_support('menus');
        //Ajout du menu dans le header
        register_nav_menu('header', 'Menu du header');
    }

    function montheme_title($title){
        return "Cest est un test d'un filter";
    }


    /**
     * Permet de modifier certain element du logo du theme
     */
    function montheme_modify_logo_class() {
        //on recupere le l'id du logo
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        // affectation de la chaine de caractere qui contiendra differents éléments pour afficher le logo
        $html = sprintf( '<a href="%1$s" aria-label="Accueil"> %2$s </a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false,[ 'class'    => 'header-logo'])
        );     
        return $html;
    }

    /**
     * Permet d'ajouter des menus dans l'administration
     */
    function montheme_add_post_types(){
       
        //add_post_type_support( 'compagnie', 'thumbnail' );
        register_post_type('compagnies', array(
            'labels' => array(
                'name' => 'Compagnies',
                'add_new_item' => 'Ajout d\'une nouvelle compagnie',
                'edit_item' => 'Modifier Compagnie',
                'new_item' => 'Nouvelle compagnie',
                'all_items' => 'Toutes les compagnies',
                'search_items' => 'Recherches des compagnies',
                'singular_name' => 'Compagnie'
            ),
            'public' => true,
            'show_in_nav_menus' => false, // une compagnie ne peux s'affiche en tant que menu
            'menu_position' => 4,
            'menu_icon' => 'dashicons-building',
            'supports' => array('title','editor','thumbnail'),
            'show_in_rest' => true

        ));

        register_post_type('formations', array(
            'labels' => array(
                'name' => 'Formation',
                'add_new_item' => 'Ajout d\'une nouvelle formation',
                'edit_item' => 'Modifier formation',
                'new_item' => 'Nouvelle formation',
                'all_items' => 'Toutes les formations',
                'search_items' => 'Recherches des formations',
                'singular_name' => 'Formation'
            ),
            'public' => true,
            'show_in_nav_menus' => false,
            'menu_position' => 4,
            'supports' => array('title','editor','thumbnail'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-welcome-learn-more'
        ));

        register_post_type('offers', array(
            'labels' => array(
                'name' => 'Offres',
                'add_new_item' => 'Ajout d\'une nouvelle offre',
                'edit_item' => 'Modifier offre',
                'new_item' => 'Nouvelle offre',
                'all_items' => 'Toutes les offres',
                'search_items' => 'Recherches des offres',
                'singular_name' => 'Offre'
            ),
            'public' => true,
            'show_in_nav_menus' => false,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-awards'
        ));

        register_post_type('actualites', array(
            'labels' => array(
                'name' => 'Actualités',
                'add_new_item' => 'Ajout d\'une nouvelle actualité',
                'edit_item' => 'Modifier actualité',
                'new_item' => 'Nouvelle actualité',
                'all_items' => 'Toutes les actualités',
                'search_items' => 'Recherches des actualités',
                'singular_name' => 'Actualité'
            ),
            'public' => true,
            'show_in_nav_menus' => false,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-text-page'
        ));
    
    
    }

    /***
     *  ACTIONS TO DO
     */

    /***
     * ACTION : j'ajouter des fonctions pour modifier le comportement de wordpress
     * FILTER : permet de modifier le comportement d'une fonction propre a wordpress
     * 
     * @tags : represente le une fonction propre a wordpress
     * @function_to_add : le nom de la fonction que l'on veut greffer a function @tag
     * @priority : propriété par defaut 10.
     *  */ 
    //add_filter('register_post_type_args', 'add_post_theme_support_args', 10, 2);
    add_action('wp_enqueue_scripts', 'montheme_assets_style');
    add_action('after_setup_theme', 'montheme_support');
    add_filter('get_custom_logo', 'montheme_modify_logo_class' );
    add_action('init', 'montheme_add_post_types');
    //add_filter('wp_title','montheme_title');
    add_theme_support( 'post-thumbnails' );
