<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SandboxTesterV2attributes
 */
class SandboxTesterV2attributes extends SpatieData
{
    public function __construct(
        public string|Optional $firstName = new Optional,
        public string|Optional $lastName = new Optional,
        public string|Optional $acAccountName = new Optional,
        public TerritoryCode|Optional $territory = new Optional,
        public bool|Optional $applePayCompatible = new Optional,
        public bool|Optional $interruptPurchases = new Optional,
        public string|Optional $subscriptionRenewalRate = new Optional,
    ) {}
}
