<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeImageResponse
 */
class GameCenterChallengeImageResponse extends SpatieData
{
    public function __construct(
        public GameCenterChallengeImage $data,
        public DocumentLinks $links,
    ) {}
}
