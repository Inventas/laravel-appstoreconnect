<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupGameCenterChallengesLinkagesResponse
 */
class GameCenterGroupGameCenterChallengesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterChallengesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterChallengesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
