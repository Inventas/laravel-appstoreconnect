<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ResourceLinks
 */
class ResourceLinks extends SpatieData
{
    public function __construct(
        public string|Optional $self = new Optional,
    ) {}
}
