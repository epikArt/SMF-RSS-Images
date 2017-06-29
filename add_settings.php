<?php
/**
 * @package RSS Images
 * @author digger http://mysmf.ru
 * @copyright 2016-2017
 * @license The MIT License (MIT) https://opensource.org/licenses/MIT
 * @version 1.0
 */

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF')) {
    require_once(dirname(__FILE__) . '/SSI.php');
} elseif (!defined('SMF')) {
    die('<b>Error:</b> Cannot install - please verify that you put this file in the same place as SMF\'s index.php and SSI.php files.');
}

if ((SMF == 'SSI') && !$user_info['is_admin']) {
    die('Admin privileges required.');
}

// List settings here in the format: setting_key => default_value.  Escape any "s. (" => \")
$mod_settings = array(
    // Settings
    'rss_images_enabled' => 0,
    'rss_images_quote' => 0,
);

// Update mod settings if applicable
foreach ($mod_settings as $new_setting => $new_value) {
    if (!isset($modSettings[$new_setting])) {
        updateSettings(array($new_setting => $new_value));
    }
}
