<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionResponse
 */
class CiBuildActionResponse extends SpatieData
{
    /**
     * @param  array<int, CiBuildRun>|Optional  $included
     */
    public function __construct(
        public CiBuildAction $data,
        public DocumentLinks $links,
        /** @var array<int, CiBuildRun>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
