<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseCreateRequestDataAttributes
 */
class PromotedPurchaseCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool $visibleForAllUsers,
        public bool|Optional|null $enabled = new Optional,
    ) {}
}
