<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoResponse
 */
class AppInfoResponse extends SpatieData
{
    /**
     * @param  array<int, AgeRatingDeclaration|AppCategory|AppInfoLocalization|App>|Optional  $included
     */
    public function __construct(
        public AppInfo $data,
        public DocumentLinks $links,
        /** @var array<int, AgeRatingDeclaration|AppCategory|AppInfoLocalization|App>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
