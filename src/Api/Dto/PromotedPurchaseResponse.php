<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseResponse
 */
class PromotedPurchaseResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2|Subscription>|Optional  $included
     */
    public function __construct(
        public PromotedPurchase $data,
        public DocumentLinks $links,
        /** @var array<int, InAppPurchaseV2|Subscription>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
