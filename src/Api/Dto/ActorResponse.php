<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ActorResponse
 */
class ActorResponse extends SpatieData
{
    public function __construct(
        public Actor $data,
        public DocumentLinks $links,
    ) {}
}
