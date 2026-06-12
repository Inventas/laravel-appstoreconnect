<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationRelationshipsSearchKeywords
 */
class AppStoreVersionLocalizationRelationshipsSearchKeywords extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionLocalizationRelationshipsSearchKeywordsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionLocalizationRelationshipsSearchKeywordsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
