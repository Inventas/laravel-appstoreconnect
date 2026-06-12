<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupLocalization
 */
class SubscriptionGroupLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionGroupLocalizationAttributes|Optional $attributes = new Optional,
        public SubscriptionGroupLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
