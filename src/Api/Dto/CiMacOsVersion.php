<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiMacOsVersion
 */
class CiMacOsVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CiMacOsVersionAttributes|Optional $attributes = new Optional,
        public CiMacOsVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
