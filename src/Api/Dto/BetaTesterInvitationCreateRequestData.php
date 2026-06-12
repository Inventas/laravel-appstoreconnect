<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaTesterInvitationCreateRequestData
 */
class BetaTesterInvitationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaTesterInvitationCreateRequestDataRelationships $relationships,
    ) {}
}
