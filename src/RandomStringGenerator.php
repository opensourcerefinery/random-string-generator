<?php

namespace OpenSourceRefinery\Component\RandomStringGenerator;

/**
 * Class RandomStringGenerator
 * @package Utils
 *
 * Solution taken from here:
 * http://stackoverflow.com/a/13733588/1056679
 */
class RandomStringGenerator
{

    const ALPHA_LOWER = 'abcdefghijklmnopqrstuvwxyz';
    const ALPHA_UPPER = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const NUMBERS = '0123456789';
    const KEYSPACE_DEFAULT = self::NUMBERS.self::ALPHA_LOWER.self::ALPHA_UPPER;

    public static function randomString(
        int $length = 64,
        string $keyspace = self::KEYSPACE_DEFAULT
    ): string {
        if ($length < 1) {
            throw new \RangeException("Length must be a positive integer");
        }
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces []= $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }
}
