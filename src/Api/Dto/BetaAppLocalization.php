<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppLocalization
 */
class BetaAppLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaAppLocalizationAttributes|Optional $attributes = new Optional,
        public BetaAppLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
