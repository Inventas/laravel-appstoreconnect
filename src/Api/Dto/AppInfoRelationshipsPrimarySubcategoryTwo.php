<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationshipsPrimarySubcategoryTwo
 */
class AppInfoRelationshipsPrimarySubcategoryTwo extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppInfoRelationshipsPrimarySubcategoryTwoData|Optional $data = new Optional,
    ) {}
}
