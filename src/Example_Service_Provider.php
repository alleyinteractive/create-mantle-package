<?php
/**
 * Example_Service_Provider class file
 *
 * @package create-mantle-package
 */

declare(strict_types=1);

namespace Create_Mantle_Package;

use Mantle\Support\Service_Provider;

/**
 * Example Service Provider
 */
class Example_Service_Provider extends Service_Provider {
	/**
	 * Register any services provided by the package.
	 */
	public function register(): void {}

	/**
	 * Bootstrap the package after all providers have been registered.
	 */
	public function boot(): void {}
}
