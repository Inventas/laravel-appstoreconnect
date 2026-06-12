<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppLocalizationCreateRequestData
 */
class BetaAppLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaAppLocalizationCreateRequestDataAttributes $attributes,
        public BetaAppLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
