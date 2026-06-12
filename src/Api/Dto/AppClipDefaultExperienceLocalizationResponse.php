<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceLocalizationResponse
 */
class AppClipDefaultExperienceLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipDefaultExperience|AppClipHeaderImage>|Optional  $included
     */
    public function __construct(
        public AppClipDefaultExperienceLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, AppClipDefaultExperience|AppClipHeaderImage>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
