<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventVideoClipResponse
 */
class AppEventVideoClipResponse extends SpatieData
{
    /**
     * @param  array<int, AppEventLocalization>|Optional  $included
     */
    public function __construct(
        public AppEventVideoClip $data,
        public DocumentLinks $links,
        /** @var array<int, AppEventLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
