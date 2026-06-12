<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdAppLinkageResponse
 */
class BundleIdAppLinkageResponse extends SpatieData
{
    public function __construct(
        public BundleIdAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
