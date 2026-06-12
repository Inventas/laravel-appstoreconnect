<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsChallengesMinimumPlatformVersions
 */
class GameCenterDetailRelationshipsChallengesMinimumPlatformVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsChallengesMinimumPlatformVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsChallengesMinimumPlatformVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
