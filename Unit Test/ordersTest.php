<?php

require 'orders.php'; 

use PHPUnit\Framework\TestCase;

class ordersTest extends TestCase
{
    public function testordersFunction() {
        $result = ordersFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = ordersFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>