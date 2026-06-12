<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppTagResponse
 */
class AppTagResponse extends SpatieData
{
    /**
     * @param  array<int, Territory>|Optional  $included
     */
    public function __construct(
        public AppTag $data,
        public DocumentLinks $links,
        /** @var array<int, Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
