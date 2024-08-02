<?php

require 'logout.php'; 

use PHPUnit\Framework\TestCase;

class logoutTest extends TestCase
{
    public function testlogoutFunction() {
        $result = logoutFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = logoutFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>