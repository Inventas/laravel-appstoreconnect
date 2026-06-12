<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPhasedReleaseUpdateRequest
 */
class AppStoreVersionPhasedReleaseUpdateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionPhasedReleaseUpdateRequestData $data,
    ) {}
}
