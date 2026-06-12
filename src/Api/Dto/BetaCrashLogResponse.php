<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaCrashLogResponse
 */
class BetaCrashLogResponse extends SpatieData
{
    public function __construct(
        public BetaCrashLog $data,
        public DocumentLinks $links,
    ) {}
}
