<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionDefaultImageLinkageResponse
 */
class GameCenterChallengeVersionDefaultImageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionDefaultImageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
