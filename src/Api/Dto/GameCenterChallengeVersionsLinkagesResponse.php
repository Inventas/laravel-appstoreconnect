<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionsLinkagesResponse
 */
class GameCenterChallengeVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterChallengeVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
