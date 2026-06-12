<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationsResponse
 */
class AppStoreVersionExperimentTreatmentLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatmentLocalization>  $data
     * @param  array<int, AppPreviewSet|AppScreenshotSet|AppStoreVersionExperimentTreatment>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppStoreVersionExperimentTreatmentLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppPreviewSet|AppScreenshotSet|AppStoreVersionExperimentTreatment>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
