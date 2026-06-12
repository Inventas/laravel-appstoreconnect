<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterCreateRequestDataRelationships
 */
class BetaTesterCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaTesterCreateRequestDataRelationshipsBetaGroups|Optional $betaGroups = new Optional,
        public BetaTesterCreateRequestDataRelationshipsBuilds|Optional $builds = new Optional,
    ) {}
}
