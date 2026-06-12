<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterRelationships
 */
class BetaTesterRelationships extends SpatieData
{
    public function __construct(
        public BetaTesterRelationshipsApps|Optional $apps = new Optional,
        public BetaTesterRelationshipsBetaGroups|Optional $betaGroups = new Optional,
        public BetaTesterRelationshipsBuilds|Optional $builds = new Optional,
    ) {}
}
