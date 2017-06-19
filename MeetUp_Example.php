<?php

/**
 * Example plugin for MeetUp
 *
 * Plugin Name:       Example plugin for MeetUp
 * Plugin URI:        https://github.com/roelveldhuizen/MeetUp_Example
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Inesta
 * Author URI:        https://inesta.nl
 *
 */

function example_notice()
{
    ?>
    <div class="notice notice-success is-dismissible">
        <p>Jeej! De plugin staat aan.</p>
    </div>
    <?php
}

add_action('admin_notices', 'example_notice');