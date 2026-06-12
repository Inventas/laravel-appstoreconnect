<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoPrimarySubcategoryTwoLinkageResponse
 */
class AppInfoPrimarySubcategoryTwoLinkageResponse extends SpatieData
{
    public function __construct(
        public AppInfoPrimarySubcategoryTwoLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
