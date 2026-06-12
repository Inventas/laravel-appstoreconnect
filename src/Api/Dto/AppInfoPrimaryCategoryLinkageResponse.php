<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoPrimaryCategoryLinkageResponse
 */
class AppInfoPrimaryCategoryLinkageResponse extends SpatieData
{
    public function __construct(
        public AppInfoPrimaryCategoryLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
