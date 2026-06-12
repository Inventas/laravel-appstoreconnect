<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoUpdateRequestDataRelationshipsPrimarySubcategoryOne
 */
class AppInfoUpdateRequestDataRelationshipsPrimarySubcategoryOne extends SpatieData
{
    public function __construct(
        public AppInfoUpdateRequestDataRelationshipsPrimarySubcategoryOneData|Optional $data = new Optional,
    ) {}
}
