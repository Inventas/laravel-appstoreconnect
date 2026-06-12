<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetRelationshipsAppScreenshots
 */
class AppScreenshotSetRelationshipsAppScreenshots extends SpatieData
{
    /**
     * @param  array<int, AppScreenshotSetRelationshipsAppScreenshotsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppScreenshotSetRelationshipsAppScreenshotsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
