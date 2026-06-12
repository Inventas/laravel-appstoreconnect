<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperiencesResponse
 */
class AppClipAdvancedExperiencesResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipAdvancedExperience>  $data
     * @param  array<int, AppClipAdvancedExperienceImage|AppClipAdvancedExperienceLocalization|AppClip>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppClipAdvancedExperience> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppClipAdvancedExperienceImage|AppClipAdvancedExperienceLocalization|AppClip>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
