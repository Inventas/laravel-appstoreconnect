<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ProfileCreateRequestData
 */
class ProfileCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public ProfileCreateRequestDataAttributes $attributes,
        public ProfileCreateRequestDataRelationships $relationships,
    ) {}
}
