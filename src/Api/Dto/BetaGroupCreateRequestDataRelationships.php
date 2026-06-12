<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupCreateRequestDataRelationships
 */
class BetaGroupCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaGroupCreateRequestDataRelationshipsApp $app,
        public BetaGroupCreateRequestDataRelationshipsBuilds|Optional $builds = new Optional,
        public BetaGroupCreateRequestDataRelationshipsBetaTesters|Optional $betaTesters = new Optional,
    ) {}
}
