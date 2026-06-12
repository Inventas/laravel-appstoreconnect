<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2relationshipsImages
 */
class InAppPurchaseV2relationshipsImages extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2relationshipsImagesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, InAppPurchaseV2relationshipsImagesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
