<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationships
 */
class AppInfoRelationships extends SpatieData
{
    public function __construct(
        public AppInfoRelationshipsApp|Optional $app = new Optional,
        public AppInfoRelationshipsAgeRatingDeclaration|Optional $ageRatingDeclaration = new Optional,
        public AppInfoRelationshipsAppInfoLocalizations|Optional $appInfoLocalizations = new Optional,
        public AppInfoRelationshipsPrimaryCategory|Optional $primaryCategory = new Optional,
        public AppInfoRelationshipsPrimarySubcategoryOne|Optional $primarySubcategoryOne = new Optional,
        public AppInfoRelationshipsPrimarySubcategoryTwo|Optional $primarySubcategoryTwo = new Optional,
        public AppInfoRelationshipsSecondaryCategory|Optional $secondaryCategory = new Optional,
        public AppInfoRelationshipsSecondarySubcategoryOne|Optional $secondarySubcategoryOne = new Optional,
        public AppInfoRelationshipsSecondarySubcategoryTwo|Optional $secondarySubcategoryTwo = new Optional,
        public AppInfoRelationshipsTerritoryAgeRatings|Optional $territoryAgeRatings = new Optional,
    ) {}
}
