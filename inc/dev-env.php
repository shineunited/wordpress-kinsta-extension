<?php

use Roots\WPConfig\Config;

if(defined('KINSTA_DEV_ENV') && KINSTA_DEV_ENV) {
	define('WP_ENV_DEFAULT', 'staging');
}
