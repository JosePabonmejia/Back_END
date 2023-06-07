<?php
use PHPunit\Framework\TestCase;
use App\Validate;
class ValidateTest extends TestCase 
{
    public function test_email()
    {
        $email = Validate::email('jose@gmail.com');
        $this->assertTrue($email);
    }
}