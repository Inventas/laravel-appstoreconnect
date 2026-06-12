<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBetaDetailRelationships
 */
class BuildBetaDetailRelationships extends SpatieData
{
    public function __construct(
        public BuildBetaDetailRelationshipsBuild|Optional $build = new Optional,
    ) {}
}
