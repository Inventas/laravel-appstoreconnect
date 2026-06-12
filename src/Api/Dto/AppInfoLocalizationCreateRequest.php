<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoLocalizationCreateRequest
 */
class AppInfoLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public AppInfoLocalizationCreateRequestData $data,
    ) {}
}
