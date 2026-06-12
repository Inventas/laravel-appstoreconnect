<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionRelationshipsLocalizations
 */
class GameCenterChallengeVersionRelationshipsLocalizations extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersionRelationshipsLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterChallengeVersionRelationshipsLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
