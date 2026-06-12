<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipsResponse
 */
class AppClipsResponse extends SpatieData
{
    /**
     * @param  array<int, AppClip>  $data
     * @param  array<int, AppClipDefaultExperience|App>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppClip> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppClipDefaultExperience|App>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
