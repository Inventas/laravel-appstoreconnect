<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupCreateRequestData
 */
class BetaGroupCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaGroupCreateRequestDataAttributes $attributes,
        public BetaGroupCreateRequestDataRelationships $relationships,
    ) {}
}
