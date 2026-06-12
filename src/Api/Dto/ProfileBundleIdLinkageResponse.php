<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ProfileBundleIdLinkageResponse
 */
class ProfileBundleIdLinkageResponse extends SpatieData
{
    public function __construct(
        public ProfileBundleIdLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
