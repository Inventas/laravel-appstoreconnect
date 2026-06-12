<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityCreateRequest
 */
class GameCenterActivityCreateRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityVersionInlineCreate>|Optional  $included
     */
    public function __construct(
        public GameCenterActivityCreateRequestData $data,
        /** @var array<int, GameCenterActivityVersionInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
