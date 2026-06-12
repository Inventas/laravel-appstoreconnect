<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionPackageCreateRequestDataRelationshipsAppStoreVersion
 */
class AlternativeDistributionPackageCreateRequestDataRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AlternativeDistributionPackageCreateRequestDataRelationshipsAppStoreVersionData $data,
    ) {}
}
