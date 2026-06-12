<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationsResponse
 */
class AppEventLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, AppEventLocalization>  $data
     * @param  array<int, AppEventScreenshot|AppEventVideoClip|AppEvent>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppEventLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppEventScreenshot|AppEventVideoClip|AppEvent>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
