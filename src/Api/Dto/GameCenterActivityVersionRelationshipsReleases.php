<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionRelationshipsReleases
 */
class GameCenterActivityVersionRelationshipsReleases extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityVersionRelationshipsReleasesDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterActivityVersionRelationshipsReleasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
