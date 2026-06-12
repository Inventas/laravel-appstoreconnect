<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PrereleaseVersionResponse
 */
class PrereleaseVersionResponse extends SpatieData
{
    /**
     * @param  array<int, App|Build>|Optional  $included
     */
    public function __construct(
        public PrereleaseVersion $data,
        public DocumentLinks $links,
        /** @var array<int, App|Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
