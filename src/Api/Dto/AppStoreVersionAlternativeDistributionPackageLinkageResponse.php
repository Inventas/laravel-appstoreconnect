<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionAlternativeDistributionPackageLinkageResponse
 */
class AppStoreVersionAlternativeDistributionPackageLinkageResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionAlternativeDistributionPackageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
