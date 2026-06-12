<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionRelationshipsDefaultImage
 */
class GameCenterChallengeVersionRelationshipsDefaultImage extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterChallengeVersionRelationshipsDefaultImageData|Optional $data = new Optional,
    ) {}
}
