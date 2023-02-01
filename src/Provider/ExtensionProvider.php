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

namespace ShineUnited\WordPress\Kinsta\Provider;

use ShineUnited\WordPress\Installer\Capability\ExtensionProvider as ExtensionProviderCapability;
use ShineUnited\WordPress\Kinsta\Extension\StagingEnvironmentExtension;
use ShineUnited\WordPress\Kinsta\Extension\DefineCDNUserdirsExtension;
use ShineUnited\WordPress\Kinsta\Extension\DefinePluginURLExtension;

/**
 * Extension Provider
 */
class ExtensionProvider implements ExtensionProviderCapability {

	/**
	 * {@inheritDoc}
	 */
	public function getExtensions(): array {
		return [
			new StagingEnvironmentExtension(),
			new DefineCDNUserdirsExtension(),
			new DefinePluginURLExtension(),
		];
	}
}
