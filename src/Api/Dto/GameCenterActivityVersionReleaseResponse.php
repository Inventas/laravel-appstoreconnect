<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionReleaseResponse
 */
class GameCenterActivityVersionReleaseResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityVersion>|Optional  $included
     */
    public function __construct(
        public GameCenterActivityVersionRelease $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterActivityVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
