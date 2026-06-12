<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPromotionCreateRequestDataRelationshipsAppStoreVersion
 */
class AppStoreVersionPromotionCreateRequestDataRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreVersionPromotionCreateRequestDataRelationshipsAppStoreVersionData $data,
    ) {}
}
