<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MerchantId
 */
class MerchantId extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public MerchantIdAttributes|Optional $attributes = new Optional,
        public MerchantIdRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
