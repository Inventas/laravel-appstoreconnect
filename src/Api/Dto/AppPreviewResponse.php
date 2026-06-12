<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewResponse
 */
class AppPreviewResponse extends SpatieData
{
    /**
     * @param  array<int, AppPreviewSet>|Optional  $included
     */
    public function __construct(
        public AppPreview $data,
        public DocumentLinks $links,
        /** @var array<int, AppPreviewSet>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
