<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoUpdateRequestDataRelationships
 */
class AppInfoUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppInfoUpdateRequestDataRelationshipsPrimaryCategory|Optional $primaryCategory = new Optional,
        public AppInfoUpdateRequestDataRelationshipsPrimarySubcategoryOne|Optional $primarySubcategoryOne = new Optional,
        public AppInfoUpdateRequestDataRelationshipsPrimarySubcategoryTwo|Optional $primarySubcategoryTwo = new Optional,
        public AppInfoUpdateRequestDataRelationshipsSecondaryCategory|Optional $secondaryCategory = new Optional,
        public AppInfoUpdateRequestDataRelationshipsSecondarySubcategoryOne|Optional $secondarySubcategoryOne = new Optional,
        public AppInfoUpdateRequestDataRelationshipsSecondarySubcategoryTwo|Optional $secondarySubcategoryTwo = new Optional,
    ) {}
}
