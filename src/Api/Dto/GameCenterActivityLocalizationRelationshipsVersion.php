<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityLocalizationRelationshipsVersion
 */
class GameCenterActivityLocalizationRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterActivityLocalizationRelationshipsVersionData|Optional $data = new Optional,
    ) {}
}
