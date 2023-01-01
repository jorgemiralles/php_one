<?php
namespace App\Test;

use App\MyClass;

class MyClass {
    public function add($a, $b){
        return $a + $b;
    }
}

class Test1Test extends \PHPUnit\Framework\TestCase {

	public function testAdd(): void  {
		$myObj = new MyClass();
		$this->assertEquals($myObj->add(1,2), 3);
	}

}
?>