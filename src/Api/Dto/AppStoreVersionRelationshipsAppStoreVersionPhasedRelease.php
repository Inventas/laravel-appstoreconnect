<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsAppStoreVersionPhasedRelease
 */
class AppStoreVersionRelationshipsAppStoreVersionPhasedRelease extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppStoreVersionRelationshipsAppStoreVersionPhasedReleaseData|Optional $data = new Optional,
    ) {}
}
