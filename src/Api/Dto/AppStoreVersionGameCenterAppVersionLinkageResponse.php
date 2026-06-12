<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionGameCenterAppVersionLinkageResponse
 */
class AppStoreVersionGameCenterAppVersionLinkageResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionGameCenterAppVersionLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
