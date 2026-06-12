<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoUpdateRequestData
 */
class AppInfoUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppInfoUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
