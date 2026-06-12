<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipHeaderImageResponse
 */
class AppClipHeaderImageResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipDefaultExperienceLocalization>|Optional  $included
     */
    public function __construct(
        public AppClipHeaderImage $data,
        public DocumentLinks $links,
        /** @var array<int, AppClipDefaultExperienceLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
