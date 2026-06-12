<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterInvitationCreateRequestDataRelationshipsBetaTester
 */
class BetaTesterInvitationCreateRequestDataRelationshipsBetaTester extends SpatieData
{
    public function __construct(
        public BetaTesterInvitationCreateRequestDataRelationshipsBetaTesterData|Optional $data = new Optional,
    ) {}
}
