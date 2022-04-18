<?php
namespace Create_Mantle_Package\Tests;

use Mantle\Testkit\Test_Case;

class Test_Example_Test extends TestCase {
	public function test_example_test() {
		$this->assertTrue( class_exists( \Create_Mantle_Package\Example_Service_Provider::class ) );
	}
}
