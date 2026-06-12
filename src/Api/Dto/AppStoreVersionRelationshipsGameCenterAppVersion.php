<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsGameCenterAppVersion
 */
class AppStoreVersionRelationshipsGameCenterAppVersion extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppStoreVersionRelationshipsGameCenterAppVersionData|Optional $data = new Optional,
    ) {}
}
