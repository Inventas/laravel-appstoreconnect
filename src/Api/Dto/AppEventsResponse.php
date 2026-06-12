<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventsResponse
 */
class AppEventsResponse extends SpatieData
{
    /**
     * @param  array<int, AppEvent>  $data
     * @param  array<int, AppEventLocalization>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppEvent> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppEventLocalization>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
