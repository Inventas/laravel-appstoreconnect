<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityCreateRequestData
 */
class GameCenterActivityCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterActivityCreateRequestDataAttributes $attributes,
        public GameCenterActivityCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
