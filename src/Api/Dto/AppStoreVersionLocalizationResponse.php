<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationResponse
 */
class AppStoreVersionLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, AppKeyword|AppPreviewSet|AppScreenshotSet|AppStoreVersion>|Optional  $included
     */
    public function __construct(
        public AppStoreVersionLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, AppKeyword|AppPreviewSet|AppScreenshotSet|AppStoreVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
