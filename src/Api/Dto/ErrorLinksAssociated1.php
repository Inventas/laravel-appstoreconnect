<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ErrorLinksAssociated1
 */
class ErrorLinksAssociated1 extends SpatieData
{
    public function __construct(
        public string|Optional $href = new Optional,
        public ErrorLinksAssociated1meta|Optional $meta = new Optional,
    ) {}
}
