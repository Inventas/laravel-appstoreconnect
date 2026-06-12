<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsAppStoreVersionSubmission
 */
class AppStoreVersionRelationshipsAppStoreVersionSubmission extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppStoreVersionRelationshipsAppStoreVersionSubmissionData|Optional $data = new Optional,
    ) {}
}
