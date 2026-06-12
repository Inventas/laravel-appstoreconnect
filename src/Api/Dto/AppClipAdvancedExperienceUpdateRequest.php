<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequest
 */
class AppClipAdvancedExperienceUpdateRequest extends SpatieData
{
    /**
     * @param  array<int, AppClipAdvancedExperienceLocalizationInlineCreate>|Optional  $included
     */
    public function __construct(
        public AppClipAdvancedExperienceUpdateRequestData $data,
        /** @var array<int, AppClipAdvancedExperienceLocalizationInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
