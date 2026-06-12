<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsChallengeReleases
 */
class GameCenterDetailRelationshipsChallengeReleases extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsChallengeReleasesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsChallengeReleasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
