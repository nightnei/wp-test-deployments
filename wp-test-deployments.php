<?php
/**
 * Plugin Name: WP Test Deployments
 * Description: A simple Hello World plugin to test GitHub deployments on WordPress.com.
 * Version: 1.0.0
 * Author: Your Name
 */

add_action('admin_notices', function () {
    echo '<div><p>Hello World from GitHub deployment!</p></div>';
});
