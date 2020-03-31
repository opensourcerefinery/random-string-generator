<?php declare(strict_types=1);

namespace OpenSourceRefinery\Component\RandomStringGenerator;

final class StringOfFormat implements StringGenerator
{
    /**
     * @var int
     */
    private $length;

    /**
     * @var string
     */
    private $charList;

    public function __construct(int $length = 64, string $charList = RandomStringGenerator::KEYSPACE_DEFAULT)
    {
        $this->length = $length;
        $this->charList = $charList;
    }

    public function generate(): string
    {
        return RandomStringGenerator::randomString($this->length, $this->charList);
    }
}
