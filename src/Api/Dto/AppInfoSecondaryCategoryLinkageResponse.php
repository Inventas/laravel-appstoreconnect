<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoSecondaryCategoryLinkageResponse
 */
class AppInfoSecondaryCategoryLinkageResponse extends SpatieData
{
    public function __construct(
        public AppInfoSecondaryCategoryLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
