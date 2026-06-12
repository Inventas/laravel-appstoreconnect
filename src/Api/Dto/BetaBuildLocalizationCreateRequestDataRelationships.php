<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaBuildLocalizationCreateRequestDataRelationships
 */
class BetaBuildLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaBuildLocalizationCreateRequestDataRelationshipsBuild $build,
    ) {}
}
