<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeImageCreateRequestDataRelationshipsLocalization
 */
class GameCenterChallengeImageCreateRequestDataRelationshipsLocalization extends SpatieData
{
    public function __construct(
        public GameCenterChallengeImageCreateRequestDataRelationshipsLocalizationData|Optional $data = new Optional,
    ) {}
}
