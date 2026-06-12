<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterCreateRequestDataRelationshipsBuilds
 */
class BetaTesterCreateRequestDataRelationshipsBuilds extends SpatieData
{
    /**
     * @param  array<int, BetaTesterCreateRequestDataRelationshipsBuildsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, BetaTesterCreateRequestDataRelationshipsBuildsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
