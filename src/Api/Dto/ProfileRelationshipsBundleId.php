<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileRelationshipsBundleId
 */
class ProfileRelationshipsBundleId extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public ProfileRelationshipsBundleIdData|Optional $data = new Optional,
    ) {}
}
