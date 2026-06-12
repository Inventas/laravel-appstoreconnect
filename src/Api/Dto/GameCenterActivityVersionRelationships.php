<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionRelationships
 */
class GameCenterActivityVersionRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionRelationshipsActivity|Optional $activity = new Optional,
        public GameCenterActivityVersionRelationshipsLocalizations|Optional $localizations = new Optional,
        public GameCenterActivityVersionRelationshipsDefaultImage|Optional $defaultImage = new Optional,
        public GameCenterActivityVersionRelationshipsReleases|Optional $releases = new Optional,
    ) {}
}
