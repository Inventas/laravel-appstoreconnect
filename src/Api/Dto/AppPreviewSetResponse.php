<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetResponse
 */
class AppPreviewSetResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalization|AppPreview|AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionLocalization>|Optional  $included
     */
    public function __construct(
        public AppPreviewSet $data,
        public DocumentLinks $links,
        /** @var array<int, AppCustomProductPageLocalization|AppPreview|AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
