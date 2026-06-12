<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBetaNotificationCreateRequestDataRelationshipsBuild
 */
class BuildBetaNotificationCreateRequestDataRelationshipsBuild extends SpatieData
{
    public function __construct(
        public BuildBetaNotificationCreateRequestDataRelationshipsBuildData $data,
    ) {}
}
