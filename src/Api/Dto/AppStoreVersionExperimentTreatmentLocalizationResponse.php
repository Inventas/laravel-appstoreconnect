<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationResponse
 */
class AppStoreVersionExperimentTreatmentLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, AppPreviewSet|AppScreenshotSet|AppStoreVersionExperimentTreatment>|Optional  $included
     */
    public function __construct(
        public AppStoreVersionExperimentTreatmentLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, AppPreviewSet|AppScreenshotSet|AppStoreVersionExperimentTreatment>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
