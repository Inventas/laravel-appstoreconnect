<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionCreateRequest
 */
class AppStoreVersionCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionCreateRequestData $data,
    ) {}
}
