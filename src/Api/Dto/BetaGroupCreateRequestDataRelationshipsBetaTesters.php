<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupCreateRequestDataRelationshipsBetaTesters
 */
class BetaGroupCreateRequestDataRelationshipsBetaTesters extends SpatieData
{
    /**
     * @param  array<int, BetaGroupCreateRequestDataRelationshipsBetaTestersDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, BetaGroupCreateRequestDataRelationshipsBetaTestersDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
