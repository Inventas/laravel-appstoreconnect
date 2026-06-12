<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionLocalizationCreateRequestData
 */
class SubscriptionLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionLocalizationCreateRequestDataAttributes $attributes,
        public SubscriptionLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
