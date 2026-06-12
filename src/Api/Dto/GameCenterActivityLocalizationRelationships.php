<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityLocalizationRelationships
 */
class GameCenterActivityLocalizationRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityLocalizationRelationshipsVersion|Optional $version = new Optional,
        public GameCenterActivityLocalizationRelationshipsImage|Optional $image = new Optional,
    ) {}
}
