<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetVersionCreateRequest
 */
class BackgroundAssetVersionCreateRequest extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionCreateRequestData $data,
    ) {}
}
