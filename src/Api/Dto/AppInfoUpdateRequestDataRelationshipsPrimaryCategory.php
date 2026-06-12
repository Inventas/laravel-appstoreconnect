<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoUpdateRequestDataRelationshipsPrimaryCategory
 */
class AppInfoUpdateRequestDataRelationshipsPrimaryCategory extends SpatieData
{
    public function __construct(
        public AppInfoUpdateRequestDataRelationshipsPrimaryCategoryData|Optional $data = new Optional,
    ) {}
}
