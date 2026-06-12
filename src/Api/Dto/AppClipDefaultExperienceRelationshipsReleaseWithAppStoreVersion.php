<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceRelationshipsReleaseWithAppStoreVersion
 */
class AppClipDefaultExperienceRelationshipsReleaseWithAppStoreVersion extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppClipDefaultExperienceRelationshipsReleaseWithAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
