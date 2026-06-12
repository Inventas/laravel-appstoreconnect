<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionLocalizationCreateRequest
 */
class AppStoreVersionLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionLocalizationCreateRequestData $data,
    ) {}
}
