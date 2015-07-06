<?php

	if (function_exists('register_sidebar')) {
		register_sidebar(array('name' => 'Sidebar'));
	}

	add_theme_support('post-thumbnails');
?>