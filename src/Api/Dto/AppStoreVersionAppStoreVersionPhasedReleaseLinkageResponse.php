<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionAppStoreVersionPhasedReleaseLinkageResponse
 */
class AppStoreVersionAppStoreVersionPhasedReleaseLinkageResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionAppStoreVersionPhasedReleaseLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
