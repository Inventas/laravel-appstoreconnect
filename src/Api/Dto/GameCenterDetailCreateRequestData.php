<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailCreateRequestData
 */
class GameCenterDetailCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterDetailCreateRequestDataRelationships $relationships,
        public GameCenterDetailCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
