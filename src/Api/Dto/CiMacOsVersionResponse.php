<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiMacOsVersionResponse
 */
class CiMacOsVersionResponse extends SpatieData
{
    /**
     * @param  array<int, CiXcodeVersion>|Optional  $included
     */
    public function __construct(
        public CiMacOsVersion $data,
        public DocumentLinks $links,
        /** @var array<int, CiXcodeVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
