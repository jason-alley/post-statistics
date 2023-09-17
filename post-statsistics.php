<?php

/* 
    Plugin Name:  Post Statistics.
    Description:  A plugin that lets the reader see stats about a post.
    Version:      0.1
    Author:      Jason Cameron
    Author URI:   https://j-cameron.me/
 */

 class PostStatisticsCountPlugin {
    function __construct() {
        add_action('admin_menu', array( $this, 'post_statistics_menu') );    
    }

    function post_statistics_menu() {
        add_options_page('Post Statistics Settings', 'Post Statistics', 'manage_options', 'post-statistics-settings', array( $this, 'post_statistics_page') );
    }

    function post_statistics_page() {
        ?>
        <div class="wrap">
            <h1>Post Statistics Settings</h1>
            <form method="post" action="options.php">
                <?php
                    settings_fields('post-statistics-settings');
                    do_settings_sections('post-statistics-settings');
                    submit_button();
                ?>
            </form>
        <?php
    }
 }

 $postStatisticsCountPlugin =  new PostStatisticsCountPlugin();


    