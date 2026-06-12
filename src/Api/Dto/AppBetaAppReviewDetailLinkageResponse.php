<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppBetaAppReviewDetailLinkageResponse
 */
class AppBetaAppReviewDetailLinkageResponse extends SpatieData
{
    public function __construct(
        public AppBetaAppReviewDetailLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
