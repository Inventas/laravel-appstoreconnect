<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildAppLinkageResponse
 */
class BuildAppLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
