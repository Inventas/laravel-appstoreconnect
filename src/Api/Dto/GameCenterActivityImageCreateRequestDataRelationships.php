<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityImageCreateRequestDataRelationships
 */
class GameCenterActivityImageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityImageCreateRequestDataRelationshipsLocalization|Optional $localization = new Optional,
        public GameCenterActivityImageCreateRequestDataRelationshipsVersion|Optional $version = new Optional,
    ) {}
}
