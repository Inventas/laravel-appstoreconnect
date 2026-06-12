<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionImagesResponse
 */
class SubscriptionImagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionImage>  $data
     * @param  array<int, Subscription>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionImage> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Subscription>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
