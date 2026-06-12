<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCreateRequestDataAttributes
 */
class InAppPurchaseOfferCodeCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, string>  $customerEligibilities
     */
    public function __construct(
        public string $name,
        /** @var array<int, string> */
        public array $customerEligibilities,
    ) {}
}
