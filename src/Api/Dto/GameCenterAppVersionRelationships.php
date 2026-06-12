<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersionRelationships
 */
class GameCenterAppVersionRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAppVersionRelationshipsCompatibilityVersions|Optional $compatibilityVersions = new Optional,
        public GameCenterAppVersionRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
    ) {}
}
