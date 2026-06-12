<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaBuildLocalizationCreateRequestData
 */
class BetaBuildLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaBuildLocalizationCreateRequestDataAttributes $attributes,
        public BetaBuildLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
