<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildLocalization
 */
class BetaBuildLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaBuildLocalizationAttributes|Optional $attributes = new Optional,
        public BetaBuildLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
