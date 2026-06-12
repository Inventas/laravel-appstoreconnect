<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetResponse
 */
class AppScreenshotSetResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalization|AppScreenshot|AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionLocalization>|Optional  $included
     */
    public function __construct(
        public AppScreenshotSet $data,
        public DocumentLinks $links,
        /** @var array<int, AppCustomProductPageLocalization|AppScreenshot|AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
