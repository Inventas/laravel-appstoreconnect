<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseUpdateRequestDataAttributes
 */
class PromotedPurchaseUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $visibleForAllUsers = new Optional,
        public bool|Optional|null $enabled = new Optional,
    ) {}
}
