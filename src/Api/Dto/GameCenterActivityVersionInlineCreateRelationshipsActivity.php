<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionInlineCreateRelationshipsActivity
 */
class GameCenterActivityVersionInlineCreateRelationshipsActivity extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionInlineCreateRelationshipsActivityData|Optional $data = new Optional,
    ) {}
}
