<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationResponse
 */
class AppCustomProductPageLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageVersion|AppKeyword|AppPreviewSet|AppScreenshotSet>|Optional  $included
     */
    public function __construct(
        public AppCustomProductPageLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, AppCustomProductPageVersion|AppKeyword|AppPreviewSet|AppScreenshotSet>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
