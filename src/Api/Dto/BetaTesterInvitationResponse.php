<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaTesterInvitationResponse
 */
class BetaTesterInvitationResponse extends SpatieData
{
    public function __construct(
        public BetaTesterInvitation $data,
        public DocumentLinks $links,
    ) {}
}
