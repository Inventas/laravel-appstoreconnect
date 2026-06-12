<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityLocalizationCreateRequestDataRelationships
 */
class GameCenterActivityLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityLocalizationCreateRequestDataRelationshipsVersion $version,
    ) {}
}
