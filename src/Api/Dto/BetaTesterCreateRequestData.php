<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterCreateRequestData
 */
class BetaTesterCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaTesterCreateRequestDataAttributes $attributes,
        public BetaTesterCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
