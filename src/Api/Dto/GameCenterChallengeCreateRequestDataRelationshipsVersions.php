<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequestDataRelationshipsVersions
 */
class GameCenterChallengeCreateRequestDataRelationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeCreateRequestDataRelationshipsVersionsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, GameCenterChallengeCreateRequestDataRelationshipsVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
