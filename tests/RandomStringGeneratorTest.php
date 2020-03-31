<?php declare(strict_types=1);

namespace OpenSourceRefinery\Component\RandomStringGenerator;

use PHPUnit\Framework\TestCase;

final class RandomStringGeneratorTest extends TestCase
{
    public function test_it_should_not_allow_length_lower_than_one(): void
    {
        $this->expectException(\RangeException::class);
        $this->expectExceptionMessage('Length must be a positive integer, "0" given.');
        RandomStringGenerator::randomString(0);
    }

    /**
     * @param int $length
     * @param string $keyspace
     * @param string $pattern
     * @dataProvider provideSupportedLength
     */
    public function test_it_should_generate_string_of_length_with_keyspace(int $length, string $keyspace, string $pattern): void
    {
        $string = RandomStringGenerator::randomString($length, $keyspace);
        $this->assertSame($length, \strlen($string));
        $this->assertRegExp($pattern, $string);
    }

    public static function provideSupportedLength(): array
    {
        return [
            [1, 'one', '/[one]{1}/'],
            [16, 'sixteen', '/[sixteen]{16}/'],
            [32, 'thirtytwo', '/[thirtytwo]{32}/'],
            [64, 'sixtyfour', '/[sixtyfour]{64}/'],
        ];
    }


}
