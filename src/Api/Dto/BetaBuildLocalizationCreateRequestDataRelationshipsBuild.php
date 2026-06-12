<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaBuildLocalizationCreateRequestDataRelationshipsBuild
 */
class BetaBuildLocalizationCreateRequestDataRelationshipsBuild extends SpatieData
{
    public function __construct(
        public BetaBuildLocalizationCreateRequestDataRelationshipsBuildData $data,
    ) {}
}
