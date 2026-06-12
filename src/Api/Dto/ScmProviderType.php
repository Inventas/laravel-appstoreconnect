<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmProviderType
 */
class ScmProviderType extends SpatieData
{
    public function __construct(
        public string|Optional $kind = new Optional,
        public string|Optional $displayName = new Optional,
        public bool|Optional $isOnPremise = new Optional,
    ) {}
}
