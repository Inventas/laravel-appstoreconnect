<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterEnabledVersionRelationshipsApp
 */
class GameCenterEnabledVersionRelationshipsApp extends SpatieData
{
    public function __construct(
        public GameCenterEnabledVersionRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
