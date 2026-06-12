<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoPrimarySubcategoryOneLinkageResponse
 */
class AppInfoPrimarySubcategoryOneLinkageResponse extends SpatieData
{
    public function __construct(
        public AppInfoPrimarySubcategoryOneLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
