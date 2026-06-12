<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionKeyCreateRequestData
 */
class AlternativeDistributionKeyCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AlternativeDistributionKeyCreateRequestDataAttributes $attributes,
        public AlternativeDistributionKeyCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
