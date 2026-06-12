<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeLocalizationRelationshipsImage
 */
class GameCenterChallengeLocalizationRelationshipsImage extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterChallengeLocalizationRelationshipsImageData|Optional $data = new Optional,
    ) {}
}
