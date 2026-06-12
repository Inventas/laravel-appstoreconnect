<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationResponse
 */
class NominationResponse extends SpatieData
{
    /**
     * @param  array<int, Actor|AppEvent|App|Territory>|Optional  $included
     */
    public function __construct(
        public Nomination $data,
        public DocumentLinks $links,
        /** @var array<int, Actor|AppEvent|App|Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
