<?php 
    /**
     * php/menus/menu-footer-mobile.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.08.07)
     * @copyright 2023 (2023.08.07)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-8',
            'menu_id' => 'Footer-Mobile'
        )
    );
?>