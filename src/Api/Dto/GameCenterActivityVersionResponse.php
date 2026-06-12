<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionResponse
 */
class GameCenterActivityVersionResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivity|GameCenterActivityImage|GameCenterActivityLocalization|GameCenterActivityVersionRelease>|Optional  $included
     */
    public function __construct(
        public GameCenterActivityVersion $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterActivity|GameCenterActivityImage|GameCenterActivityLocalization|GameCenterActivityVersionRelease>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
