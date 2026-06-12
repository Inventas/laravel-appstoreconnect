<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoSecondarySubcategoryTwoLinkageResponse
 */
class AppInfoSecondarySubcategoryTwoLinkageResponse extends SpatieData
{
    public function __construct(
        public AppInfoSecondarySubcategoryTwoLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
