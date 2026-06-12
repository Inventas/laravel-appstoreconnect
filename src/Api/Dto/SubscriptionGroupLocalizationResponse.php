<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupLocalizationResponse
 */
class SubscriptionGroupLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionGroup>|Optional  $included
     */
    public function __construct(
        public SubscriptionGroupLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, SubscriptionGroup>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
