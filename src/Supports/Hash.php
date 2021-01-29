<?php

namespace Illuminate\Hashing\Supports;

use Illuminate\Hashing\Config\Services;

/**
 * @see \Illuminate\Hashing\HashManager
 *
 * @method static array info(string $hashedValue)
 * @method static bool check(string $value, string $hashedValue, array $options = [])
 * @method static bool needsRehash(string $hashedValue, array $options = [])
 * @method static string make(string $value, array $options = [])
 */
class Hash
{
    /**
     * Static instance hash service.
     *
     * @param string $method
     * @param array $arguments
     */
    public static function __callStatic($method, $arguments)
    {
        return Services::hash()->$method(...$arguments);
    }
}
