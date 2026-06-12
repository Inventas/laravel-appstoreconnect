<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceLocalizationsResponse
 */
class AppClipDefaultExperienceLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipDefaultExperienceLocalization>  $data
     * @param  array<int, AppClipDefaultExperience|AppClipHeaderImage>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppClipDefaultExperienceLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppClipDefaultExperience|AppClipHeaderImage>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
