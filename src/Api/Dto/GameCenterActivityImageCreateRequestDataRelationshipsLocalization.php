<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityImageCreateRequestDataRelationshipsLocalization
 */
class GameCenterActivityImageCreateRequestDataRelationshipsLocalization extends SpatieData
{
    public function __construct(
        public GameCenterActivityImageCreateRequestDataRelationshipsLocalizationData|Optional $data = new Optional,
    ) {}
}
