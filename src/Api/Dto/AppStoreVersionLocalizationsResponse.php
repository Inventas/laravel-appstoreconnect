<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationsResponse
 */
class AppStoreVersionLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionLocalization>  $data
     * @param  array<int, AppKeyword|AppPreviewSet|AppScreenshotSet|AppStoreVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppStoreVersionLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppKeyword|AppPreviewSet|AppScreenshotSet|AppStoreVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
