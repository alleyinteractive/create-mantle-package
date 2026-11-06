<?php
/**
 * Create Mantle Package Tests: Base Test Class
 *
 * @package create-mantle-package
 */

declare(strict_types=1);

namespace Create_Mantle_Package\Tests;

use Mantle\Testing\Concerns\Prevent_Remote_Requests;
use Mantle\Testkit\Test_Case as Testkit_Test_Case;

/**
 * Create Mantle Package Base Test Case
 */
abstract class TestCase extends Testkit_Test_Case {
	use Prevent_Remote_Requests;
}
