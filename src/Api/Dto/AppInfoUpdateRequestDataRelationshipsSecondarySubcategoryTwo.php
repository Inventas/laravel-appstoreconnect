<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoUpdateRequestDataRelationshipsSecondarySubcategoryTwo
 */
class AppInfoUpdateRequestDataRelationshipsSecondarySubcategoryTwo extends SpatieData
{
    public function __construct(
        public AppInfoUpdateRequestDataRelationshipsSecondarySubcategoryTwoData|Optional $data = new Optional,
    ) {}
}
