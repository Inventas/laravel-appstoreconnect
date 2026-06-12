<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupCreateRequestDataRelationshipsBuilds
 */
class BetaGroupCreateRequestDataRelationshipsBuilds extends SpatieData
{
    /**
     * @param  array<int, BetaGroupCreateRequestDataRelationshipsBuildsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, BetaGroupCreateRequestDataRelationshipsBuildsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
