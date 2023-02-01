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

use ShineUnited\WordPress\Installer\Extension\InitializeConfigExtension;
use ShineUnited\WordPress\Installer\Extension\PriorityExtension;
use ShineUnited\Conductor\Configuration\Configuration;

/**
 * Kinsta Staging Environment Extension
 */
class StagingEnvironmentExtension extends PriorityExtension {

	/**
	 * Initializes the extension.
	 */
	public function __construct() {
		parent::__construct(InitializeConfigExtension::PRIORITY + 1);
	}

	/**
	 * {@inheritDoc}
	 */
	public function generateCode(Configuration $config): string {
		$code = [];

		$code[] = 'if (defined(\'KINSTA_DEV_ENV\')) {';
		$code[] = "\t" . 'Config::define(\'WP_ENV_DEFAULT\', \'staging\');';
		$code[] = '}';

		return implode(PHP_EOL, $code);
	}
}
