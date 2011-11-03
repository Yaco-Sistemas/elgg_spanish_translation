<?php

	/**
	* Spanish translation.
	* 
        * @package spanish_translation
	* @author  Nicolás Nimis, Danny Navarro, Yaco Sistemas
	* @copyright Nicolás Nimis, Yaco Sistemas, 2011
	* @link http://www.yaco.es/
	*/
	
	require_once($_SERVER["DOCUMENT_ROOT"] . "/engine/start.php");

	admin_gatekeeper();
	set_context('admin');

	// Set admin user for user block
	set_page_owner($_SESSION['guid']);

	$title = elgg_view_title(elgg_echo('spanish_translation:title'));
        $intro = elgg_view('spanish_translation/intro');
        $list = elgg_view('spanish_translation/list');

	$page_data = $title . $intro . $list;

	// Display main admin menu
        page_draw(elgg_echo('spanish_translation'), elgg_view_layout("two_column_left_sidebar", '', $page_data));

?>
