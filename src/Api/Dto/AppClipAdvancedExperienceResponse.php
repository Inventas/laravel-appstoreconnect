<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceResponse
 */
class AppClipAdvancedExperienceResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipAdvancedExperienceImage|AppClipAdvancedExperienceLocalization|AppClip>|Optional  $included
     */
    public function __construct(
        public AppClipAdvancedExperience $data,
        public DocumentLinks $links,
        /** @var array<int, AppClipAdvancedExperienceImage|AppClipAdvancedExperienceLocalization|AppClip>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
