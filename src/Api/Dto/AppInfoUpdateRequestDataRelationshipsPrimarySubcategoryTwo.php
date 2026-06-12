<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoUpdateRequestDataRelationshipsPrimarySubcategoryTwo
 */
class AppInfoUpdateRequestDataRelationshipsPrimarySubcategoryTwo extends SpatieData
{
    public function __construct(
        public AppInfoUpdateRequestDataRelationshipsPrimarySubcategoryTwoData|Optional $data = new Optional,
    ) {}
}
