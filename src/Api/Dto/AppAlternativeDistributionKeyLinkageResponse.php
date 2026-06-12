<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAlternativeDistributionKeyLinkageResponse
 */
class AppAlternativeDistributionKeyLinkageResponse extends SpatieData
{
    public function __construct(
        public AppAlternativeDistributionKeyLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
