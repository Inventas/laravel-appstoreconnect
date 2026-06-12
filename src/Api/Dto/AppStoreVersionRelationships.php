<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationships
 */
class AppStoreVersionRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionRelationshipsApp|Optional $app = new Optional,
        public AppStoreVersionRelationshipsAppStoreVersionLocalizations|Optional $appStoreVersionLocalizations = new Optional,
        public AppStoreVersionRelationshipsBuild|Optional $build = new Optional,
        public AppStoreVersionRelationshipsAppStoreVersionPhasedRelease|Optional $appStoreVersionPhasedRelease = new Optional,
        public AppStoreVersionRelationshipsGameCenterAppVersion|Optional $gameCenterAppVersion = new Optional,
        public AppStoreVersionRelationshipsRoutingAppCoverage|Optional $routingAppCoverage = new Optional,
        public AppStoreVersionRelationshipsAppStoreReviewDetail|Optional $appStoreReviewDetail = new Optional,
        public AppStoreVersionRelationshipsAppStoreVersionSubmission|Optional $appStoreVersionSubmission = new Optional,
        public AppStoreVersionRelationshipsAppClipDefaultExperience|Optional $appClipDefaultExperience = new Optional,
        public AppStoreVersionRelationshipsAppStoreVersionExperiments|Optional $appStoreVersionExperiments = new Optional,
        public AppStoreVersionRelationshipsAppStoreVersionExperimentsV2|Optional $appStoreVersionExperimentsV2 = new Optional,
        public AppStoreVersionRelationshipsCustomerReviews|Optional $customerReviews = new Optional,
        public AppStoreVersionRelationshipsAlternativeDistributionPackage|Optional $alternativeDistributionPackage = new Optional,
    ) {}
}
