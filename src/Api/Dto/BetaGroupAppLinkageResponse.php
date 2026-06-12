<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupAppLinkageResponse
 */
class BetaGroupAppLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaGroupAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
