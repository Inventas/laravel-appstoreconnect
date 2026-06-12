<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationshipsSecondarySubcategoryTwo
 */
class AppInfoRelationshipsSecondarySubcategoryTwo extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppInfoRelationshipsSecondarySubcategoryTwoData|Optional $data = new Optional,
    ) {}
}
