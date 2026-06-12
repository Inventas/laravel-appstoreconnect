<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2relationshipsVersions
 */
class GameCenterLeaderboardV2relationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardV2relationshipsVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterLeaderboardV2relationshipsVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
