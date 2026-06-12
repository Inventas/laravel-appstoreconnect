<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationshipsSecondaryCategory
 */
class AppInfoRelationshipsSecondaryCategory extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppInfoRelationshipsSecondaryCategoryData|Optional $data = new Optional,
    ) {}
}
