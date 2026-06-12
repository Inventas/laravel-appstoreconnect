<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionAppStoreVersionSubmissionLinkageResponse
 */
class AppStoreVersionAppStoreVersionSubmissionLinkageResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionAppStoreVersionSubmissionLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
