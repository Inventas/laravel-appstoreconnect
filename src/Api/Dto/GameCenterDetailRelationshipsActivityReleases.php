<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsActivityReleases
 */
class GameCenterDetailRelationshipsActivityReleases extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsActivityReleasesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsActivityReleasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
