<?php

use PHPUnit\Framework\TestCase;
use RandomPasswordGenerator\RandomPasswordGenerator;

class RandomPasswordGeneratorTest extends TestCase
{
    public function testGenerate()
    {
        $password = RandomPasswordGenerator::generate(12);
        
        // Assert that the generated password is not empty
        $this->assertNotEmpty($password);
        
        // Assert that the length of the generated password is correct
        $this->assertEquals(12, strlen($password));
    }
}
