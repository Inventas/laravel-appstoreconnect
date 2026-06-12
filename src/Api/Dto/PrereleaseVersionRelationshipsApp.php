<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PrereleaseVersionRelationshipsApp
 */
class PrereleaseVersionRelationshipsApp extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PrereleaseVersionRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
