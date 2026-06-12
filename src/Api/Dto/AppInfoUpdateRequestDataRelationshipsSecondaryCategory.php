<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoUpdateRequestDataRelationshipsSecondaryCategory
 */
class AppInfoUpdateRequestDataRelationshipsSecondaryCategory extends SpatieData
{
    public function __construct(
        public AppInfoUpdateRequestDataRelationshipsSecondaryCategoryData|Optional $data = new Optional,
    ) {}
}
