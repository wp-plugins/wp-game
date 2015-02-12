<?php
/**
 * @package wp-game
 * @version 1.6
 */
/*
Plugin Name: WP Game
Plugin URI: http://wordpress.org/plugins/wp-game/
Description: Play games in wp-admin.
Author: mayxaybot
Version: 1.0
Author URI: http://anybuy.vn/may-xay-bot-gao-nuoc.htm
*/
function wp_game_custom_style() {
	wp_enqueue_style( 'wp-game-style', plugins_url('style.css',__FILE__ ) );
}
add_action( 'admin_init','wp_game_custom_style');
add_action('admin_bar_menu', 'wp_game_add_items',  100);

function wp_game_add_items($admin_bar)
{
    $args = array(
		'id'    => 'wp-game',
		'title' => 'WP-Game',
		'href'  => '#',
		'meta'  => array(
			'title' => __('WP-Game'),
		),
    );
    $admin_bar->add_menu( $args);
	/* Add games to menu */
	$game_dir = plugin_dir_path( __FILE__ ) . 'games/';
	$game_cats = glob($game_dir."*", GLOB_ONLYDIR);		
	foreach($game_cats as $game_cat){
		$parent = 'wp-game';
		$game_cat_name = basename ( $game_cat );
		$args = array(
			'id'    => $game_cat_name,
			'title' => $game_cat_name,
			'href'  => '#',
			'parent' => $parent,
			'meta'  => array(
				'title' => $game_cat_name,
			),
		);
		$admin_bar->add_menu( $args);
		$parent = $game_cat_name;
		/*get page url*/
    	$the_page_id = get_option( 'wp_game_plugin_page_id' );
		$url = get_permalink( $the_page_id );
	
		$games = glob($game_dir.$game_cat_name."/*", GLOB_ONLYDIR);
		foreach($games as $game) {
			$game_name = basename ( $game );
			$args = array(
				'id'    => $game_name,
				'title' => str_replace( '_', ' ', $game_name ),
				//'href'  => $url . '?g=' . urlencode( plugins_url( 'games/'.$game_cat_name.'/', __FILE__ ) . $game_name ),
				'href'  => $url . '?g=' . urlencode( $game_cat_name.'/'. $game_name ),
				'parent' => $parent,
				'meta'  => array(
					'title' => $game_name,
					),
				);
			$admin_bar->add_menu( $args);
		}
	}
}
/* Runs when plugin is activated */
register_activation_hook(__FILE__,'wp_game_plugin_install'); 
/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'wp_game_plugin_remove' );
function wp_game_plugin_install() {

    global $wpdb;

    $the_page_title = 'WP-Game';
    $the_page_name = 'wp-game';

    // the menu entry...
    delete_option("wp_game_plugin_page_title");
    add_option("wp_game_plugin_page_title", $the_page_title, '', 'yes');
    // the slug...
    delete_option("wp_game_plugin_page_name");
    add_option("wp_game_plugin_page_name", $the_page_name, '', 'yes');
    // the id...
    delete_option("wp_game_plugin_page_id");
    add_option("wp_game_plugin_page_id", '0', '', 'yes');

    $the_page = get_page_by_title( $the_page_title );

    if ( ! $the_page ) {
        // Create post object
        $_p = array();
        $_p['post_title'] = $the_page_title;
        $_p['post_content'] = "This text may be overridden by the plugin. You shouldn't edit it.";
        $_p['post_status'] = 'publish';
        $_p['post_type'] = 'page';
        $_p['comment_status'] = 'closed';
        $_p['ping_status'] = 'closed';
        $_p['post_category'] = array(1); // the default 'Uncatrgorised'
        // Insert the post into the database
        $the_page_id = wp_insert_post( $_p );
    }
    else {
        // the plugin may have been previously active and the page may just be trashed...
        $the_page_id = $the_page->ID;
        //make sure the page is not trashed...
        $the_page->post_status = 'publish';
        $the_page_id = wp_update_post( $the_page );

    }
    delete_option( 'wp_game_plugin_page_id' );
    add_option( 'wp_game_plugin_page_id', $the_page_id );

}

function wp_game_plugin_remove() {
    global $wpdb;
    $the_page_title = get_option( "wp_game_plugin_page_title" );
    $the_page_name = get_option( "wp_game_plugin_page_name" );
    //  the id of our page...
    $the_page_id = get_option( 'wp_game_plugin_page_id' );
    if( $the_page_id ) {
        wp_delete_post( $the_page_id ); // this will trash, not delete
    }
    delete_option("wp_game_plugin_page_title");
    delete_option("wp_game_plugin_page_name");
    delete_option("wp_game_plugin_page_id");

}
//new template
add_filter( 'page_template', 'wp_game_page_template' );
function wp_game_page_template( $page_template )
{
    $the_page_id = get_option( 'wp_game_plugin_page_id' );
	if ( is_page( $the_page_id ) ) {
        //$page_template = plugin_dir_path( __FILE__ ).'templates/template-custom.php';
		$param = $_SERVER['REQUEST_URI'];
		$param = str_replace( '/wp-game/?g=', '', $param );
		$param = urldecode( $param );
		$page_template = plugin_dir_path( __FILE__ ).'games/'.$param.'/index.php';
    }
    return $page_template;
}
?>