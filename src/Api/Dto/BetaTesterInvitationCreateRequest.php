<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaTesterInvitationCreateRequest
 */
class BetaTesterInvitationCreateRequest extends SpatieData
{
    public function __construct(
        public BetaTesterInvitationCreateRequestData $data,
    ) {}
}
