<?php

function vtut_link(){
	
	global $wp_admin_bar;

	$args = array(
		'id'    => 'parent_node',
		'title' => 'Watch WP Tutorials'
		
	);
	$wp_admin_bar->add_menu( $args );

	// add a child item to our parent item
	$args = array(
		'id'     => 'child_node1',
		'title'  => 'Introduction to WordPress',
		'parent' => 'parent_node',
		'href'	 => 'https://www.youtube.com/embed/GBxy8Ohc4y4',
		'meta'   => array('class' => 'youtube')
		
	);
	$wp_admin_bar->add_menu( $args );

	// add a child item to our parent item
	$args = array(
		'id'     => 'child_node2',
		'title'  => 'How to Create a Blog Post',
		'parent' => 'parent_node',
		'href'	 => 'https://www.youtube.com/embed/YCRiY8YROxw',
		'meta'   => array('class' => 'youtube')
		
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'child_node3',
		'title'  => 'How to Create a Page',
		'parent' => 'parent_node',
		'href'	 => 'https://www.youtube.com/embed/uAfaqCq_rT8',
		'meta'   => array('class' => 'youtube')
		
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'child_node4',
		'title'  => 'How to Create a Menu',
		'parent' => 'parent_node',
		'href'	 => 'https://www.youtube.com/embed/xrF97qiOvD4',
		'meta'   => array('class' => 'youtube')
		
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'child_node5',
		'title'  => 'How to Add Widgets',
		'parent' => 'parent_node',
		'href'	 => 'https://www.youtube.com/embed/DhjTo8V-A1o',
		'meta'   => array('class' => 'youtube')
		
	);
	$wp_admin_bar->add_menu( $args );

}

add_action( 'admin_bar_menu', 'vtut_link', 999 );