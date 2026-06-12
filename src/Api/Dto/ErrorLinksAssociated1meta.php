<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ErrorLinksAssociated1meta
 */
class ErrorLinksAssociated1meta extends SpatieData
{
    public function __construct(
        public string|Optional $source = new Optional,
    ) {}
}
