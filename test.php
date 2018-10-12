<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /** @test */
    public function it_can_print_hello_world()
    {
        $_GET['name'] = 'John Doe';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello John Doe', $content);
    }
}
