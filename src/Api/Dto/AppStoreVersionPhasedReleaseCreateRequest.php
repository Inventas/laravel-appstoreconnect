<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPhasedReleaseCreateRequest
 */
class AppStoreVersionPhasedReleaseCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionPhasedReleaseCreateRequestData $data,
    ) {}
}
