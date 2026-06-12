<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionAppStoreReviewDetailLinkageResponse
 */
class AppStoreVersionAppStoreReviewDetailLinkageResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionAppStoreReviewDetailLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
