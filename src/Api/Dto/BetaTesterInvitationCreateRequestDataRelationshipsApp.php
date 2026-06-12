<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaTesterInvitationCreateRequestDataRelationshipsApp
 */
class BetaTesterInvitationCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public BetaTesterInvitationCreateRequestDataRelationshipsAppData $data,
    ) {}
}
