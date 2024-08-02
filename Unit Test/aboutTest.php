<?php

require 'about.php'; 

use PHPUnit\Framework\TestCase;

class aboutTest extends TestCase
{
    public function testaboutFunction() {
        $result = aboutFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = aboutFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>