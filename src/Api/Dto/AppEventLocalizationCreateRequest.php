<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventLocalizationCreateRequest
 */
class AppEventLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public AppEventLocalizationCreateRequestData $data,
    ) {}
}
