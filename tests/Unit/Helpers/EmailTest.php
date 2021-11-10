<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_valid_email()
    {
        $result = Email::validate('i@gmail.com');
        $this->assertTrue($result);
    }

    public function test_invalid_email()
    {
        $result = Email::validate('i@@gmail.com');
        $this->assertFalse($result);        
    }
}
