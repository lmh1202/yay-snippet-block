<?php
/**
 * Plugin Name:       Yay Snippet Block
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            ONYX-yaycommerce
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       yay-snippet-block
 *
 * @package create-block
 */

if(!defined('ABSPATH')) {
    die('We\' are sorry, but you can not directly access this file.');
}

define('YAYSB_VERSION', '1.0.0');
define('YAYSB_PLUGIN_FILE', __FILE__);
define('YAYSB_PLUGIN_PATH', plugin_dir_path(YAYSB_PLUGIN_FILE));
define('YAYSB_PLUGIN_URL', plugin_dir_url(YAYSB_PLUGIN_FILE));
define('YAYSB_IS_DEVELOPMENT', true);

add_action(
    'init',
    function () {
        register_block_type(
            YAYSB_PLUGIN_PATH.'/build', [
            'render_callback' => 'render_yay_snippet_block',
            ] 
        );
    }
);

function render_yay_snippet_block($block_attributes,$content)
{
    return sprintf("<p class=''>%s</p>", esc_attr('This is new block', 'yay-snippet-block'));
}