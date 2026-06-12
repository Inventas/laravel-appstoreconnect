<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseContent
 */
class InAppPurchaseContent extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseContentAttributes|Optional $attributes = new Optional,
        public InAppPurchaseContentRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
