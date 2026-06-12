<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndAppAvailabilityPreOrderResponse
 */
class EndAppAvailabilityPreOrderResponse extends SpatieData
{
    public function __construct(
        public EndAppAvailabilityPreOrder $data,
        public DocumentLinks $links,
    ) {}
}
