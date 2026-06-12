<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersionRelationshipsAppStoreVersion
 */
class GameCenterAppVersionRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterAppVersionRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
