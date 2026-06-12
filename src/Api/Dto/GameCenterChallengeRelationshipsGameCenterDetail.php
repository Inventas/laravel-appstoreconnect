<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeRelationshipsGameCenterDetail
 */
class GameCenterChallengeRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterChallengeRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
