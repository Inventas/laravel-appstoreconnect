<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationships
 */
class BuildRelationships extends SpatieData
{
    public function __construct(
        public BuildRelationshipsPreReleaseVersion|Optional $preReleaseVersion = new Optional,
        public BuildRelationshipsIndividualTesters|Optional $individualTesters = new Optional,
        public BuildRelationshipsBetaGroups|Optional $betaGroups = new Optional,
        public BuildRelationshipsBetaBuildLocalizations|Optional $betaBuildLocalizations = new Optional,
        public BuildRelationshipsAppEncryptionDeclaration|Optional $appEncryptionDeclaration = new Optional,
        public BuildRelationshipsBetaAppReviewSubmission|Optional $betaAppReviewSubmission = new Optional,
        public BuildRelationshipsApp|Optional $app = new Optional,
        public BuildRelationshipsBuildBetaDetail|Optional $buildBetaDetail = new Optional,
        public BuildRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
        public BuildRelationshipsIcons|Optional $icons = new Optional,
        public BuildRelationshipsBuildBundles|Optional $buildBundles = new Optional,
        public BuildRelationshipsBuildUpload|Optional $buildUpload = new Optional,
        public BuildRelationshipsPerfPowerMetrics|Optional $perfPowerMetrics = new Optional,
        public BuildRelationshipsDiagnosticSignatures|Optional $diagnosticSignatures = new Optional,
    ) {}
}
