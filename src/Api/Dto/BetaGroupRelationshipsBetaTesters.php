<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupRelationshipsBetaTesters
 */
class BetaGroupRelationshipsBetaTesters extends SpatieData
{
    /**
     * @param  array<int, BetaGroupRelationshipsBetaTestersDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BetaGroupRelationshipsBetaTestersDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
