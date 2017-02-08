<?php
/*
Plugin Name: UAMS Quicklinks
Plugin URI: http://www.uams.edu
Description: Add the default UAMS quick links menu.
Version: 0.1
Author: Todd McKee, MEd
Author URI: http://www.uams.edu
*/

function uamsweb_check_menus() {

 // If the Primary Menu doesn't exist, let's create it
 if ( ! is_nav_menu( 'ql-menu' ) ) {

  // Create menu
  $menu_id = wp_create_nav_menu ( 'Quick Links Menu' );

  // Add menu items
  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('GUS'),
   'menu-item-url' => 'http://gus.uams.edu/',
   'menu-item-classes' => 'i-gus big',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

    wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('Profiles'),
   'menu-item-url' => 'https://uams-triprofiles.uams.edu/profiles/search/',
   'menu-item-classes' => 'i-molecule big',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('Library'),
   'menu-item-url' => 'http://library.uams.edu/',
   'menu-item-classes' => 'i-books-1 big',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('UAMS Bookstore'),
   'menu-item-url' => 'http://library.uams.edu/library-services/bookstore/',
   'menu-item-classes' => 'i-cart big',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('Webmail'),
   'menu-item-url' => 'http://webmail.uams.edu/',
   'menu-item-classes' => 'i-mail',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('Employee Self Service'),
   'menu-item-url' => 'https://enterprise.uams.edu/irj/portal',
   'menu-item-classes' => 'i-id-employee-female',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('Computing / IT'),
   'menu-item-url' => 'http://www.uams.edu/IT/',
   'menu-item-classes' => 'i-screen-1',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('Intranet'),
   'menu-item-url' => 'http://inside.uams.edu/',
   'menu-item-classes' => 'i-information',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('UAMS Facebook'),
   'menu-item-url' => 'https://www.facebook.com/UAMSHealth',
   'menu-item-classes' => 'facebook social',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

  wp_update_nav_menu_item ( $menu_id, 0, array (
   'menu-item-title' => __('UAMS Twitter'),
   'menu-item-url' => 'https://twitter.com/uamshealth',
   'menu-item-classes' => 'twitter social',
   'menu-item-status' => 'publish' ,
   'menu-item-target' => '_blank') );

//  wp_update_nav_menu_item ( $menu_id, 0, array (
//   'menu-item-title' => __(''), //Text Title
//   'menu-item-url' => '', // URL
//   'menu-item-classes' => '', // CSS classes
//   'menu-item-status' => 'publish' , //Status
//   'menu-item-target' => '_blank') ); //Open in new window


  // Lower case theme_name
  $theme = strtolower ( str_replace ( ' ', '_', wp_get_theme() ) );

  // Get the theme options
  $theme_mods = get_option ( 'theme_mods_' . $theme );

  // Set the location of the primary menu
  $theme_mods['nav_menu_locations'] = array ( 'ql-menu' => $menu_id );

  // Update the theme options
  update_option ( 'theme_mods_' . $theme, $theme_mods );

 }

}

add_action( 'init', 'uamsweb_check_menus' );

?>