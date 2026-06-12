<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildAppStoreVersionLinkageResponse
 */
class BuildAppStoreVersionLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildAppStoreVersionLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
