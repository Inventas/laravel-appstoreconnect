<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationshipsPrimaryCategory
 */
class AppInfoRelationshipsPrimaryCategory extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppInfoRelationshipsPrimaryCategoryData|Optional $data = new Optional,
    ) {}
}
