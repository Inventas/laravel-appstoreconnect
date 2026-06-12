<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppLocalizationRelationships
 */
class BetaAppLocalizationRelationships extends SpatieData
{
    public function __construct(
        public BetaAppLocalizationRelationshipsApp|Optional $app = new Optional,
    ) {}
}
