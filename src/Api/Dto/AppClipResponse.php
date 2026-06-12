<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipResponse
 */
class AppClipResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipDefaultExperience|App>|Optional  $included
     */
    public function __construct(
        public AppClip $data,
        public DocumentLinks $links,
        /** @var array<int, AppClipDefaultExperience|App>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
