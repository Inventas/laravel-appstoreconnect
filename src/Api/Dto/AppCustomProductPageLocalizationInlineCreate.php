<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationInlineCreate
 */
class AppCustomProductPageLocalizationInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public AppCustomProductPageLocalizationInlineCreateAttributes $attributes,
        public string|Optional $id = new Optional,
        public AppCustomProductPageLocalizationInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
