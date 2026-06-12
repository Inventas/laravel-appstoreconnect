<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailUpdateRequestData
 */
class GameCenterDetailUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterDetailUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public GameCenterDetailUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
