<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SandboxTesterV2updateRequestDataAttributes
 */
class SandboxTesterV2updateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public TerritoryCode|Optional $territory = new Optional,
        public bool|Optional|null $interruptPurchases = new Optional,
        public string|Optional|null $subscriptionRenewalRate = new Optional,
    ) {}
}
