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

namespace ShineUnited\WordPress\Kinsta\Tests\Extension;

use ShineUnited\WordPress\Kinsta\Extension\DefineCDNUserdirsExtension;
use ShineUnited\WordPress\Installer\Extension\DefineWPContentDirExtension;

/**
 * Define KINSTA_CDN_USERDIRS Extension Test
 */
class DefineCDNUserdirsExtensionTest extends ExtensionTestCase {

	/**
	 * {@inheritDoc}
	 */
	protected function getExtensionClass(): string {
		return DefineCDNUserdirsExtension::class;
	}

	/**
	 * {@inheritDoc}
	 */
	protected function getConstructorArguments(): array {
		return [];
	}

	/**
	 * {@inheritDoc}
	 */
	protected function expectedPriority(): int {
		return DefineWPContentDirExtension::PRIORITY + 1;
	}

	/**
	 * @return void
	 */
	public function testGenerateCode(): void {
		$this->toDo();
	}
}
