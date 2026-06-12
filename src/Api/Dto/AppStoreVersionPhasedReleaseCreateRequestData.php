<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionPhasedReleaseCreateRequestData
 */
class AppStoreVersionPhasedReleaseCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreVersionPhasedReleaseCreateRequestDataRelationships $relationships,
        public AppStoreVersionPhasedReleaseCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
