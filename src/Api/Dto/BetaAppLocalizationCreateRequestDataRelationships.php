<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppLocalizationCreateRequestDataRelationships
 */
class BetaAppLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaAppLocalizationCreateRequestDataRelationshipsApp $app,
    ) {}
}
