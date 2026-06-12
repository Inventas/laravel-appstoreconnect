<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterInvitationCreateRequestDataRelationships
 */
class BetaTesterInvitationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaTesterInvitationCreateRequestDataRelationshipsApp $app,
        public BetaTesterInvitationCreateRequestDataRelationshipsBetaTester|Optional $betaTester = new Optional,
    ) {}
}
