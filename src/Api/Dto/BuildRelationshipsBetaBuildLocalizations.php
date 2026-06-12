<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsBetaBuildLocalizations
 */
class BuildRelationshipsBetaBuildLocalizations extends SpatieData
{
    /**
     * @param  array<int, BuildRelationshipsBetaBuildLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BuildRelationshipsBetaBuildLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
