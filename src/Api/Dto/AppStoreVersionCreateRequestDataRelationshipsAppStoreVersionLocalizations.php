<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionCreateRequestDataRelationshipsAppStoreVersionLocalizations
 */
class AppStoreVersionCreateRequestDataRelationshipsAppStoreVersionLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionCreateRequestDataRelationshipsAppStoreVersionLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionCreateRequestDataRelationshipsAppStoreVersionLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
