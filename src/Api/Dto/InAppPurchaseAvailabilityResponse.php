<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAvailabilityResponse
 */
class InAppPurchaseAvailabilityResponse extends SpatieData
{
    /**
     * @param  array<int, Territory>|Optional  $included
     */
    public function __construct(
        public InAppPurchaseAvailability $data,
        public DocumentLinks $links,
        /** @var array<int, Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
