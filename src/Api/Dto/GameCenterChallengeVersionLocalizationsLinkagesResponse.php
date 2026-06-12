<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionLocalizationsLinkagesResponse
 */
class GameCenterChallengeVersionLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersionLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterChallengeVersionLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
