<?php

require 'contact.php'; 

use PHPUnit\Framework\TestCase;

class contactTest extends TestCase
{
    public function testcontactFunction() {
        $result = ContactFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = ContactFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>