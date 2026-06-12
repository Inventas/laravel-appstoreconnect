<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoLocalizationResponse
 */
class AppInfoLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, AppInfo>|Optional  $included
     */
    public function __construct(
        public AppInfoLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, AppInfo>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
