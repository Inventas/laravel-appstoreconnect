<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfosResponse
 */
class AppInfosResponse extends SpatieData
{
    /**
     * @param  array<int, AppInfo>  $data
     * @param  array<int, AgeRatingDeclaration|AppCategory|AppInfoLocalization|App>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppInfo> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AgeRatingDeclaration|AppCategory|AppInfoLocalization|App>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
