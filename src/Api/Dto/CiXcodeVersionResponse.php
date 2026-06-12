<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiXcodeVersionResponse
 */
class CiXcodeVersionResponse extends SpatieData
{
    /**
     * @param  array<int, CiMacOsVersion>|Optional  $included
     */
    public function __construct(
        public CiXcodeVersion $data,
        public DocumentLinks $links,
        /** @var array<int, CiMacOsVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
