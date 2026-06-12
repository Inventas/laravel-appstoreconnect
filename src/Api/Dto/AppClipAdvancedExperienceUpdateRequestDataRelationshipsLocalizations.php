<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequestDataRelationshipsLocalizations
 */
class AppClipAdvancedExperienceUpdateRequestDataRelationshipsLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppClipAdvancedExperienceUpdateRequestDataRelationshipsLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, AppClipAdvancedExperienceUpdateRequestDataRelationshipsLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
