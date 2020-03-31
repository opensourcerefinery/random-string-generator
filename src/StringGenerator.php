<?php declare(strict_types=1);

namespace OpenSourceRefinery\Component\RandomStringGenerator;

interface StringGenerator
{
    public function generate(): string;
}
