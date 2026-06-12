<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2appStoreVersionExperimentTreatmentsLinkagesResponseDataItem
 */
class AppStoreVersionExperimentV2appStoreVersionExperimentTreatmentsLinkagesResponseDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
