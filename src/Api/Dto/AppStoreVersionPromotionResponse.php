<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPromotionResponse
 */
class AppStoreVersionPromotionResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionPromotion $data,
        public DocumentLinks $links,
    ) {}
}
