<?php
/**
 * Create Mantle Package Tests: Example Service Provider Test
 *
 * @package create-mantle-package
 */

declare(strict_types=1);

namespace Create_Mantle_Package\Tests\Feature;

use Create_Mantle_Package\Example_Service_Provider;
use Create_Mantle_Package\Tests\TestCase;

/**
 * Feature tests for the example service provider.
 *
 * @link https://mantle.alley.com/testing/test-framework.html
 */
class ExampleServiceProviderTest extends TestCase {
	/**
	 * The service provider can be registered and booted against the application.
	 */
	public function test_provider_boots(): void {
		$provider = new Example_Service_Provider( $this->app );

		$provider->register();
		$provider->boot_provider();

		$this->assertNotEmpty( home_url() );
	}
}
