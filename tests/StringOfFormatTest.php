<?php declare(strict_types=1);

namespace OpenSourceRefinery\Component\RandomStringGenerator;

use PHPUnit\Framework\TestCase;

final class StringOfFormatTest extends TestCase
{
    public function test_it_should_generate_string_of_format(): void
    {
        $generator = new StringOfFormat(4, 'ab');
        $this->assertRegExp('/[ab]{4}/', $generator->generate());
    }
}
