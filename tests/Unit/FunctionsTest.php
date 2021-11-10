<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_functions_valid_email()
    {
        $result = validate_email('i@gmail.com');
        $this->assertTrue($result);
    }

    public function test_functions_invalid_email()
    {
        $result = validate_email('i@@gmail.com');
        $this->assertFalse($result);
    }    
}
