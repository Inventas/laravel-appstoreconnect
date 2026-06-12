<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetsResponse
 */
class AppPreviewSetsResponse extends SpatieData
{
    /**
     * @param  array<int, AppPreviewSet>  $data
     * @param  array<int, AppCustomProductPageLocalization|AppPreview|AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionLocalization>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppPreviewSet> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppCustomProductPageLocalization|AppPreview|AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionLocalization>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
