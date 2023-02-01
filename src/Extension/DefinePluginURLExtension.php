<?php

/**
 * This file is part of WordPress Kinsta Extensions.
 *
 * (c) Shine United LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ShineUnited\WordPress\Kinsta\Extension;

use ShineUnited\WordPress\Installer\Extension\DefineWPContentURLExtension;
use ShineUnited\WordPress\Installer\Extension\PriorityExtension;
use ShineUnited\Conductor\Configuration\Configuration;

/**
 * Define KINSTAMU_CUSTOM_MUPLUGIN_URL Extension
 */
class DefinePluginURLExtension extends PriorityExtension {

	/**
	 * Initializes the extension.
	 */
	public function __construct() {
		parent::__construct(DefineWPContentURLExtension::PRIORITY + 1);
	}

	/**
	 * {@inheritDoc}
	 */
	public function generateCode(Configuration $config): string {
		return 'Config::define(\'KINSTAMU_CUSTOM_MUPLUGIN_URL\', Config::get(\'WP_CONTENT_URL\') . \'/mu-plugins/kinsta-mu-plugins\');';
	}
}
