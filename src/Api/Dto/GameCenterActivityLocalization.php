<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityLocalization
 */
class GameCenterActivityLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterActivityLocalizationAttributes|Optional $attributes = new Optional,
        public GameCenterActivityLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
