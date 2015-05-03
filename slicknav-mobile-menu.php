<?php
/*
Plugin Name: SlickNav Mobile Menu
Plugin URI: http://wpbeaches.com/using-slick-responsive-menus-genesis-child-theme/
Description: Using SlickNav Responsive Mobile Menus in WordPress
Author: Neil Gee
Version: 1.3.2
Author URI: http://wpbeaches.com
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain: slicknav-mobile-menu
Domain Path: /languages/
*/


  // If called direct, refuse
  if ( ! defined( 'ABSPATH' ) ) {
          die;
  }


/*
 * Assign global variables
 *
 */


$plugin_url = WP_PLUGIN_URL . '/slicknav-mobile-menu';
$options = array();


/**
 * Register our text domain.
 */
function snm_load_textdomain() {
  load_plugin_textdomain( 'slicknav-mobile-menu', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'snm_load_textdomain' );


//Script-tac-ulous -> All the Scripts and Styles Registered and Enqueued
function ng_slicknav_scripts_styles() {

  wp_register_script ( 'slickjs' , plugins_url( '/js/jquery.slicknav.min.js',  __FILE__), array( 'jquery' ), '1.0.3', false );
  wp_register_style ( 'slickcss' , plugins_url( '/css/slicknav.min.css',  __FILE__), '' , '1.0.3', 'all' );

  wp_enqueue_script( 'slickjs' );
  wp_enqueue_style( 'slickcss' );
}

add_action( 'wp_enqueue_scripts', 'ng_slicknav_scripts_styles' );



//Set Responsive Nav to fire - change CSS ID of menu to suit
function ng_slicknav_responsive_menujs() {

      global $plugin_url;
      global $options;

      $options = get_option('ng_slicknavmenu');
        if ( $options !== '') {
        $ng_slicknav_menu = $options['ng_slicknav_menu'];
        $ng_slicknav_position = $options['ng_slicknav_position'];
        $ng_slicknav_label = $options['ng_slicknav_label'];
        $ng_slicknav_parent_links = $options['ng_slicknav_parent_links'];
        $ng_slicknav_child_links = $options['ng_slicknav_child_links'];
        $ng_slicknav_speed = $options['ng_slicknav_speed'];
}?>

      <script>
            jQuery(function($) {
            $('<?php echo $ng_slicknav_menu; ?>').slicknav({
                prependTo:'<?php if( !isset( $ng_slicknav_position ) || $ng_slicknav_position =='') {
              echo 'body'; 
            }
              else {
              echo $ng_slicknav_position; }?>',
                label:'<?php echo $ng_slicknav_label; ?>',
                allowParentLinks: <?php echo $ng_slicknav_parent_links; ?>,
                showChildren: <?php echo $ng_slicknav_child_links; ?>,
                duration:<?php if( !isset( $ng_slicknav_speed ) || $ng_slicknav_speed =='') {
              echo 400; 
            }
              else {
              echo $ng_slicknav_speed; }?>,
            });
            });
        </script>

<?php
}
add_action ( 'wp_head','ng_slicknav_responsive_menujs' );


//Set Responsive Nav to fire - change CSS ID of menu to suit
function ng_slicknav_responsive_menucss() {

      global $plugin_url;
      global $options;

      $options = get_option('ng_slicknavmenu');
        if ( $options !== '') {
        $ng_slicknav_menu = $options['ng_slicknav_menu'];
        $ng_slicknav_width = $options['ng_slicknav_width'];
        $ng_slicknav_background = $options['ng_slicknav_background'];
        $ng_slicknav_button = $options['ng_slicknav_button'];
        $ng_slicknav_label_color = $options['ng_slicknav_label_color'];
        $ng_slicknav_icon_color = $options['ng_slicknav_icon_color'];
        $ng_slicknav_button_position = $options['ng_slicknav_button_position'];
        $ng_slicknav_font = $options['ng_slicknav_font'];
        $ng_slicknav_label_size = $options['ng_slicknav_label_size'];
        $ng_slicknav_submenu_position = $options['ng_slicknav_submenu_position']; 
        $ng_slicknav_link_hover_color = $options['ng_slicknav_link_hover_color'];
        $ng_slicknav_link_hover_color_submenu = $options['ng_slicknav_link_hover_color_submenu'];
        $ng_slicknav_link_color = $options['ng_slicknav_link_color'];
        $ng_slicknav_font_case = $options['ng_slicknav_font_case'];
        $ng_slicknav_label_shadow = $options['ng_slicknav_label_shadow'];
        $ng_slicknav_icon_shadow = $options['ng_slicknav_icon_shadow'];
        $ng_slicknav_label_weight = $options['ng_slicknav_label_weight'];

}?>

      <style>
            .slicknav_menu {
                display: none;
            }
           
          @media screen and (max-width: <?php echo $ng_slicknav_width; ?>px) {

            <?php echo $ng_slicknav_menu; ?> {
                display: none;
             }
             .slicknav_menu {
                display: block;
                background: <?php echo $ng_slicknav_background; ?>;
             }
             .slicknav_btn {
                background-color:<?php echo $ng_slicknav_button; ?> ;
                float: <?php echo $ng_slicknav_button_position; ?>;
             }

             .slicknav_nav .slicknav_arrow {
                float: <?php echo $ng_slicknav_submenu_position; ?>
             }
             .slicknav_menu .slicknav_menutxt {
                color: <?php echo $ng_slicknav_label_color; ?>;
                text-shadow: <?php echo $ng_slicknav_label_shadow; ?>;
                font-size: <?php echo $ng_slicknav_label_size; ?>px;
                font-weight: <?php echo $ng_slicknav_label_weight; ?>;
             }
             .slicknav_menu .slicknav_icon-bar {
                background-color: <?php echo $ng_slicknav_icon_color; ?>;
                box-shadow: <?php echo $ng_slicknav_icon_shadow; ?>;;
             }
             .slicknav_nav li a {
                color: <?php echo $ng_slicknav_link_color; ?>;
                text-transform: <?php echo $ng_slicknav_font_case; ?> ;
                font-size: <?php echo $ng_slicknav_font; ?>px;
             }
             .slicknav_nav a:hover {
                background: <?php echo $ng_slicknav_link_hover_color; ?>;
             }
              .slicknav_nav .slicknav_row:hover{
                background: <?php echo $ng_slicknav_link_hover_color_submenu; ?>;
             }

      }
        </style>

<?php
}

add_action( 'wp_head','ng_slicknav_responsive_menucss' );



function ng_slicknav_menu() {

    /*
     * Use the add options_page function
     add_options_page( $page_title, $menu_title, $capability, $menu-slug, $function)
     *
     */

     add_options_page(
        'SlickNav Options Plugin',
        'SlickNav Menu',
       // _e('SlickNav Menu', 'slicknav-mobile-menu'),
        'manage_options',
        'wpslicknav-menu',
        'wpslicknav_menu_options_page'
      );
}
add_action( 'admin_menu', 'ng_slicknav_menu' );



function wpslicknav_menu_options_page() {

    if( !current_user_can('manage_options')) {

      wp_die( "Hall and Oates 'Say No Go'" );
    }

    global $plugin_url;
    global $options;

    if( isset( $_POST['ng_slicknav_form_submitted'] ) ) {

        $hidden_field = esc_html($_POST['ng_slicknav_form_submitted'] );

        if( $hidden_field == 'Y' ) {

          $ng_slicknav_menu = esc_html( $_POST['ng_slicknav_menu'] );
          $ng_slicknav_width = esc_html( $_POST['ng_slicknav_width'] );
          $ng_slicknav_background = esc_html( $_POST['ng_slicknav_background'] );
          $ng_slicknav_button = esc_html( $_POST['ng_slicknav_button'] );
          $ng_slicknav_label_color = esc_html( $_POST['ng_slicknav_label_color'] );
          $ng_slicknav_icon_color = esc_html( $_POST['ng_slicknav_icon_color'] );
          $ng_slicknav_button_position= esc_html( $_POST['ng_slicknav_button_position']);
          $ng_slicknav_font= esc_html( $_POST['ng_slicknav_font']);
          $ng_slicknav_label_size= esc_html( $_POST['ng_slicknav_label_size']);
          $ng_slicknav_submenu_position = esc_html( $_POST['ng_slicknav_submenu_position']);
          $ng_slicknav_position = esc_html( $_POST['ng_slicknav_position']);
          $ng_slicknav_label = esc_html( $_POST['ng_slicknav_label']);
          $ng_slicknav_parent_links = esc_html( $_POST['ng_slicknav_parent_links']);
          $ng_slicknav_child_links = esc_html( $_POST['ng_slicknav_child_links']);
          $ng_slicknav_speed = esc_html( $_POST['ng_slicknav_speed']);
          $ng_slicknav_link_color = esc_html( $_POST['ng_slicknav_link_color']);
          $ng_slicknav_link_hover_color = esc_html( $_POST['ng_slicknav_link_hover_color']);
          $ng_slicknav_link_hover_color_submenu = esc_html( $_POST['ng_slicknav_link_hover_color_submenu']);
          $ng_slicknav_font_case = esc_html( $_POST['ng_slicknav_font_case']);
          $ng_slicknav_label_shadow = esc_html( $_POST['ng_slicknav_label_shadow']);
          $ng_slicknav_icon_shadow = esc_html( $_POST['ng_slicknav_icon_shadow']);
          $ng_slicknav_label_weight = esc_html( $_POST['ng_slicknav_label_weight']);



          $options['ng_slicknav_menu'] = $ng_slicknav_menu;
          $options['ng_slicknav_width'] = $ng_slicknav_width;
          $options['ng_slicknav_background'] = $ng_slicknav_background;
          $options['ng_slicknav_button'] = $ng_slicknav_button;
          $options['ng_slicknav_label_color'] = $ng_slicknav_label_color;
          $options['ng_slicknav_icon_color'] = $ng_slicknav_icon_color;
          $options['ng_slicknav_button_position'] = $ng_slicknav_button_position;
          $options['ng_slicknav_font'] = $ng_slicknav_font;
          $options['ng_slicknav_label_size'] = $ng_slicknav_label_size;
          $options['ng_slicknav_submenu_position'] = $ng_slicknav_submenu_position;
          $options['ng_slicknav_position'] = $ng_slicknav_position;
          $options['ng_slicknav_label'] = $ng_slicknav_label;
          $options['ng_slicknav_parent_links'] = $ng_slicknav_parent_links;
          $options['ng_slicknav_child_links'] = $ng_slicknav_child_links;
          $options['ng_slicknav_speed'] = $ng_slicknav_speed;
          $options['ng_slicknav_link_color'] = $ng_slicknav_link_color;
          $options['ng_slicknav_link_hover_color'] = $ng_slicknav_link_hover_color;
          $options['ng_slicknav_link_hover_color_submenu'] = $ng_slicknav_link_hover_color_submenu;
          $options['ng_slicknav_font_case'] = $ng_slicknav_font_case;
          $options['ng_slicknav_label_shadow'] = $ng_slicknav_label_shadow;
          $options['ng_slicknav_icon_shadow'] = $ng_slicknav_icon_shadow;
          $options['ng_slicknav_label_weight'] = $ng_slicknav_label_weight;

          $options['last_updated']     = time();

          update_option('ng_slicknavmenu', $options);

        }


    }

    $options = get_option('ng_slicknavmenu');

    if ( $options !== '') {

        $ng_slicknav_menu = $options['ng_slicknav_menu'];
        $ng_slicknav_width = $options['ng_slicknav_width'];
        $ng_slicknav_background = $options['ng_slicknav_background'];
        $ng_slicknav_button = $options['ng_slicknav_button'];
        $ng_slicknav_label_color = $options['ng_slicknav_label_color'];
        $ng_slicknav_icon_color = $options['ng_slicknav_icon_color'];
        $ng_slicknav_button_position = $options['ng_slicknav_button_position'];
        $ng_slicknav_font = $options['ng_slicknav_font'];
        $ng_slicknav_label_size = $options['ng_slicknav_label_size'];
        $ng_slicknav_submenu_position = $options['ng_slicknav_submenu_position'];
        $ng_slicknav_position = $options['ng_slicknav_position'];
        $ng_slicknav_label = $options['ng_slicknav_label'];
        $ng_slicknav_parent_links = $options['ng_slicknav_parent_links'];
        $ng_slicknav_child_links = $options['ng_slicknav_child_links'];
        $ng_slicknav_speed = $options['ng_slicknav_speed'];
        $ng_slicknav_link_color = $options['ng_slicknav_link_color'];
        $ng_slicknav_link_hover_color = $options['ng_slicknav_link_hover_color'];
        $ng_slicknav_link_hover_color_submenu = $options['ng_slicknav_link_hover_color_submenu'];
        $ng_slicknav_font_case = $options['ng_slicknav_font_case'];
        $ng_slicknav_label_shadow = $options['ng_slicknav_label_shadow'];
        $ng_slicknav_icon_shadow = $options['ng_slicknav_icon_shadow'];
        $ng_slicknav_label_weight = $options['ng_slicknav_label_weight'];
        


    }

   require( 'inc/options-page-wrapper.php' );
}


//Add in color picker functionality
add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
function mw_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', plugins_url('/js/color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}