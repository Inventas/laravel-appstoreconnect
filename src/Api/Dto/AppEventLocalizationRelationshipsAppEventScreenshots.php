<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationRelationshipsAppEventScreenshots
 */
class AppEventLocalizationRelationshipsAppEventScreenshots extends SpatieData
{
    /**
     * @param  array<int, AppEventLocalizationRelationshipsAppEventScreenshotsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppEventLocalizationRelationshipsAppEventScreenshotsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
