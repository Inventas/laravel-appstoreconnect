<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionRelationshipsReleases
 */
class GameCenterChallengeVersionRelationshipsReleases extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersionRelationshipsReleasesDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterChallengeVersionRelationshipsReleasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
