<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationshipsSecondarySubcategoryOne
 */
class AppInfoRelationshipsSecondarySubcategoryOne extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppInfoRelationshipsSecondarySubcategoryOneData|Optional $data = new Optional,
    ) {}
}
