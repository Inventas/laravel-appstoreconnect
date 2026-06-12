<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PrereleaseVersionAppLinkageResponse
 */
class PrereleaseVersionAppLinkageResponse extends SpatieData
{
    public function __construct(
        public PrereleaseVersionAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
