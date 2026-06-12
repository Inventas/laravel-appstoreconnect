<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionAppClipDefaultExperienceLinkageRequest
 */
class AppStoreVersionAppClipDefaultExperienceLinkageRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionAppClipDefaultExperienceLinkageRequestData $data,
    ) {}
}
