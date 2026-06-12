<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionAppClipDefaultExperienceLinkageResponse
 */
class AppStoreVersionAppClipDefaultExperienceLinkageResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionAppClipDefaultExperienceLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
