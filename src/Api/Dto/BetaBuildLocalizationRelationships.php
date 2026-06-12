<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildLocalizationRelationships
 */
class BetaBuildLocalizationRelationships extends SpatieData
{
    public function __construct(
        public BetaBuildLocalizationRelationshipsBuild|Optional $build = new Optional,
    ) {}
}
