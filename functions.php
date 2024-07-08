<?php

// Variable Declarations 


// Include Statements 
include (get_theme_file_path('/includes/front/enqueue.php'));
include (get_theme_file_path('/includes/front/head.php'));
include (get_theme_file_path('/includes/setup.php'));

// Hooks  
add_action('wp_enqueue_scripts', 'b_enqueue');
add_action("wp_head", "b_head", 5);
add_action('after_setup_theme', 'b_setup_theme');