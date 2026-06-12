<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ChecksumsComposite
 */
class ChecksumsComposite extends SpatieData
{
    public function __construct(
        public string|Optional $hash = new Optional,
        public string|Optional $algorithm = new Optional,
    ) {}
}
