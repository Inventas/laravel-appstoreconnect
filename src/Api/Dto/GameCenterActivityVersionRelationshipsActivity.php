<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionRelationshipsActivity
 */
class GameCenterActivityVersionRelationshipsActivity extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionRelationshipsActivityData|Optional $data = new Optional,
    ) {}
}
