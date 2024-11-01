<?php
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld()
    {
        $this->expectOutputString('Hello, World!');
        include __DIR__ . '/../src/index.php'; 
    }
}
