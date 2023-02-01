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

use ShineUnited\WordPress\Installer\Extension\DefineWPContentDirExtension;
use ShineUnited\WordPress\Installer\Extension\PriorityExtension;
use ShineUnited\Conductor\Configuration\Configuration;
use Symfony\Component\Filesystem\Path;

/**
 * Define KINSTA_CDN_USERDIRS Extension
 */
class DefineCDNUserdirsExtension extends PriorityExtension {

	/**
	 * Initializes the extension.
	 */
	public function __construct() {
		parent::__construct(DefineWPContentDirExtension::PRIORITY + 1);
	}

	/**
	 * {@inheritDoc}
	 */
	public function generateCode(Configuration $config): string {
		$path = Path::makeRelative($config['wordpress.content-dir'], $config['wordpress.home-dir']);

		return 'Config::define(\'KINSTA_CDN_USERDIRS\', \'' . addslashes($path) . '\');';
	}
}
