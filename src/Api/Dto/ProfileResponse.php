<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileResponse
 */
class ProfileResponse extends SpatieData
{
    /**
     * @param  array<int, BundleId|Certificate|Device>|Optional  $included
     */
    public function __construct(
        public Profile $data,
        public DocumentLinks $links,
        /** @var array<int, BundleId|Certificate|Device>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
