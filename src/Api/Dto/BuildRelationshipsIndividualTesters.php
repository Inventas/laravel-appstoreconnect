<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsIndividualTesters
 */
class BuildRelationshipsIndividualTesters extends SpatieData
{
    /**
     * @param  array<int, BuildRelationshipsIndividualTestersDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BuildRelationshipsIndividualTestersDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
