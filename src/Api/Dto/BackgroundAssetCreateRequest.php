<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetCreateRequest
 */
class BackgroundAssetCreateRequest extends SpatieData
{
    public function __construct(
        public BackgroundAssetCreateRequestData $data,
    ) {}
}
