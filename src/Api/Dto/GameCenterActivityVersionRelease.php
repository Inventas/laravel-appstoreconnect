<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionRelease
 */
class GameCenterActivityVersionRelease extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterActivityVersionReleaseRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
