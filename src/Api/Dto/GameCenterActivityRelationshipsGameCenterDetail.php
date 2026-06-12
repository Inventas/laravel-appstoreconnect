<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityRelationshipsGameCenterDetail
 */
class GameCenterActivityRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterActivityRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
