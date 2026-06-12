<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionUpdateRequestData
 */
class AppStoreVersionUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public AppStoreVersionUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
