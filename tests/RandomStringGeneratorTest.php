<?php declare(strict_types=1);

namespace OpenSourceRefinery\Component\RandomStringGenerator;

use PHPUnit\Framework\TestCase;

final class RandomStringGeneratorTest extends TestCase
{
    protected function consoleWrite($var)
    {
        fwrite(STDERR, print_r($var, true)."\r\n");
    }

    public function test_it_should_return_value_when_invoked(): void
    {
        $characterSet = RandomStringGenerator::ALPHA_LOWER.RandomStringGenerator::NUMBERS;
        $string = RandomStringGenerator::randomString(1, $characterSet);
        $this->consoleWrite($string);
        $this->assertEquals(1, \strlen($string));
        

        $string = RandomStringGenerator::randomString(16);
        $this->consoleWrite($string);
        $this->assertEquals(16, \strlen($string));
        

        $string = RandomStringGenerator::randomString(32);
        $this->consoleWrite($string);
        $this->assertEquals(32, \strlen($string));
        

        $string = RandomStringGenerator::randomString(64);
        $this->consoleWrite($string);
        $this->assertEquals(64, \strlen($string));
        
    }
}
