<?php

/* 
    Plugin Name:  Post Statistics.
    Description:  A plugin that lets the reader see stats about a post.
    Version:      0.1
    Author:      Jason Cameron
    Author URI:   https://j-cameron.me/
 */


 add_action('admin_menu', 'post_statistics_menu');

    function post_statistics_menu() {
        add_options_page('Post Statistics Settings', 'Post Statistics', 'manage_options', 'post-statistics-settings', 'post_statistics_page');
    }

    function post_statistics_page() {
        ?>
        <p>Hello from our pots stats plugin.</p>
        <?php
    }