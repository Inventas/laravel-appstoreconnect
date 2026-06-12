<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeAttributes
 */
class InAppPurchaseOfferCodeAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $customerEligibilities
     */
    public function __construct(
        public string|Optional $name = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $customerEligibilities = new Optional,
        public int|Optional $productionCodeCount = new Optional,
        public int|Optional $sandboxCodeCount = new Optional,
        public bool|Optional $active = new Optional,
    ) {}
}
