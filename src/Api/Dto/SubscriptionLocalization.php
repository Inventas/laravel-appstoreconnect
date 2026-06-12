<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionLocalization
 */
class SubscriptionLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionLocalizationAttributes|Optional $attributes = new Optional,
        public SubscriptionLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
