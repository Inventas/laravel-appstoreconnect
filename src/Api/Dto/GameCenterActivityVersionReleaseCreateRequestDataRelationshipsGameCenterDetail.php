<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionReleaseCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterActivityVersionReleaseCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionReleaseCreateRequestDataRelationshipsGameCenterDetailData $data,
    ) {}
}
