<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBetaNotificationCreateRequestData
 */
class BuildBetaNotificationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BuildBetaNotificationCreateRequestDataRelationships $relationships,
    ) {}
}
