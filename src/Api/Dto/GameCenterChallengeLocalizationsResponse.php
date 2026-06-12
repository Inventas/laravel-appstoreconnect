<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeLocalizationsResponse
 */
class GameCenterChallengeLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeLocalization>  $data
     * @param  array<int, GameCenterChallengeImage|GameCenterChallengeVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterChallengeLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterChallengeImage|GameCenterChallengeVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
