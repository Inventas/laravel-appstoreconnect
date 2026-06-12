<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationshipsPrimarySubcategoryOne
 */
class AppInfoRelationshipsPrimarySubcategoryOne extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppInfoRelationshipsPrimarySubcategoryOneData|Optional $data = new Optional,
    ) {}
}
