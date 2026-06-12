<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionCreateRequestData
 */
class GameCenterActivityVersionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterActivityVersionCreateRequestDataRelationships $relationships,
        public GameCenterActivityVersionCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
