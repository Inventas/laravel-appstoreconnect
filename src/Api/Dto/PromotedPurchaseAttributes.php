<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseAttributes
 */
class PromotedPurchaseAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $visibleForAllUsers = new Optional,
        public bool|Optional $enabled = new Optional,
        public string|Optional $state = new Optional,
    ) {}
}
