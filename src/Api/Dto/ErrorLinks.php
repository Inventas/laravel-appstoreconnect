<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ErrorLinks
 */
class ErrorLinks extends SpatieData
{
    public function __construct(
        public string|Optional $about = new Optional,
        public string|ErrorLinksAssociated1|Optional $associated = new Optional,
    ) {}
}
