<?php
namespace test;

require "../src/add.php"

class Test1Test extends \PHPUnit\Framework\TestCase {

	public function testAdd(): void  {

		$this->assertEquals(add(1,2), 3);
	}

}