<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsGameCenterGroup
 */
class GameCenterDetailRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterDetailRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
