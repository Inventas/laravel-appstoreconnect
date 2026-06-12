<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetsResponse
 */
class AppScreenshotSetsResponse extends SpatieData
{
    /**
     * @param  array<int, AppScreenshotSet>  $data
     * @param  array<int, AppCustomProductPageLocalization|AppScreenshot|AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionLocalization>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppScreenshotSet> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppCustomProductPageLocalization|AppScreenshot|AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionLocalization>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
