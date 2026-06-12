<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewDetailAppLinkageResponse
 */
class BetaAppReviewDetailAppLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaAppReviewDetailAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
