<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetUpdateRequest
 */
class BackgroundAssetUpdateRequest extends SpatieData
{
    public function __construct(
        public BackgroundAssetUpdateRequestData $data,
    ) {}
}
