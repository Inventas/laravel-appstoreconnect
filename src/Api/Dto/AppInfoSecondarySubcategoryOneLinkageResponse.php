<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoSecondarySubcategoryOneLinkageResponse
 */
class AppInfoSecondarySubcategoryOneLinkageResponse extends SpatieData
{
    public function __construct(
        public AppInfoSecondarySubcategoryOneLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
