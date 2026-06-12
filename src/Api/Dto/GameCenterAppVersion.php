<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersion
 */
class GameCenterAppVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAppVersionAttributes|Optional $attributes = new Optional,
        public GameCenterAppVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
