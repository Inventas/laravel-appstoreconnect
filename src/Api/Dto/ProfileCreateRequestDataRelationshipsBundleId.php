<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ProfileCreateRequestDataRelationshipsBundleId
 */
class ProfileCreateRequestDataRelationshipsBundleId extends SpatieData
{
    public function __construct(
        public ProfileCreateRequestDataRelationshipsBundleIdData $data,
    ) {}
}
