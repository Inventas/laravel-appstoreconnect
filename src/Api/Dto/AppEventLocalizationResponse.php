<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationResponse
 */
class AppEventLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, AppEventScreenshot|AppEventVideoClip|AppEvent>|Optional  $included
     */
    public function __construct(
        public AppEventLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, AppEventScreenshot|AppEventVideoClip|AppEvent>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
