<?php

namespace Illuminate\Hashing\Config;

use CodeIgniter\Config\BaseService;
use Illuminate\Hashing\Contracts\Hasher;
use Illuminate\Hashing\HashManager;

class Services extends BaseService
{
    /**
     * Create HashManager instance.
     *
     * @return Hasher
     */
    public static function hash(bool $getshared = true)
    {
        if ($getshared) {
            return self::getSharedInstance('hash');
        }

        return new HashManager(new Hashing());
    }
}
