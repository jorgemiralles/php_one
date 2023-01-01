<?php
namespace App\Test;

use App\MyClass;

class Test1Test extends \PHPUnit\Framework\TestCase {

	public function testAdd(): void  {
		$myObj = new MyClass();
		$this->assertEquals($myObj->add(1,2), 3);
	}

}