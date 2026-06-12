<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoUpdateRequestDataRelationshipsSecondarySubcategoryOne
 */
class AppInfoUpdateRequestDataRelationshipsSecondarySubcategoryOne extends SpatieData
{
    public function __construct(
        public AppInfoUpdateRequestDataRelationshipsSecondarySubcategoryOneData|Optional $data = new Optional,
    ) {}
}
