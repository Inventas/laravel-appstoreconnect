<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionSubmission
 */
class AppStoreVersionSubmission extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionSubmissionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
