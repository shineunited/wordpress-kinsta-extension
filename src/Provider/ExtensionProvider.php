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
use ShineUnited\WordPress\Installer\Extension\RequirePathExtension;
use ShineUnited\WordPress\Installer\Extension\InitializeConfigExtension;
use ShineUnited\WordPress\Installer\Extension\DefineWPContentURLExtension;

/**
 * Extension Provider
 */
class ExtensionProvider implements ExtensionProviderCapability {

	/**
	 * {@inheritDoc}
	 */
	public function getExtensions(): array {
		return [
			new RequirePathExtension(__DIR__ . '/../../inc/dev-env.php', InitializeConfigExtension::PRIORITY + 1),
			new RequirePathExtension(__DIR__ . '/../../inc/plugin-url.php', DefineWPContentURLExtension::PRIORITY + 1),
		];
	}
}
