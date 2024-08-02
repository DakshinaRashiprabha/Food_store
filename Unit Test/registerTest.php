<?php

require 'register.php'; 

use PHPUnit\Framework\TestCase;

class registerTest extends TestCase
{
    public function testloginFunction() {
        $result = RegisterFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = RegisterFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>