<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPromotionCreateRequest
 */
class AppStoreVersionPromotionCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionPromotionCreateRequestData $data,
    ) {}
}
