<?php
/**
 * Дочерняя тема для темы enjoyblog
 * 
 */

defined( 'ABSPATH' ) || exit;

/**
 * Helper
 */
function show($param){
	echo "<pre>";
	print_r($param);
	echo "</per>";
}

/**
* Подключение скриптов и стилей
*/
function ds11_scripts_style() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'ds11-style', get_stylesheet_directory_uri() .'/assets/css/ds11.css' );
	wp_enqueue_script( 'ds11-script', get_stylesheet_directory_uri() . '/assets/js/ds11.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'ds11_scripts_style' );

/**
* Возврат раздела виджетов в классический вид
*/
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

/**
 * Блок руководителя 
 */
require 'inc/chif.php';

/**
 * Банеры
 */
require 'inc/baners.php';

/**
 * Банер госуслуги
 */
require 'inc/gosuslugi.php';

?>