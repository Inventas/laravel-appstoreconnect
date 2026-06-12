<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationsResponse
 */
class AppCustomProductPageLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalization>  $data
     * @param  array<int, AppCustomProductPageVersion|AppKeyword|AppPreviewSet|AppScreenshotSet>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppCustomProductPageVersion|AppKeyword|AppPreviewSet|AppScreenshotSet>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
