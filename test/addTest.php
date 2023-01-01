<?php
include('../src/add.php');
namespace App\Test;

use App\MyClass;

class Test1Test extends \PHPUnit\Framework\TestCase {

	public function testAdd(): void  {
		$myObj = new MyClass();
		$this->assertEquals($myObj->add(1,2), 3);
	}

	public function testMulti(): void  {
		$this->assertEquals(multi(1,2), 2);
	}


}
?>