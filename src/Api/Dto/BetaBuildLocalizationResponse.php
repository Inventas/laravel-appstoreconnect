<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildLocalizationResponse
 */
class BetaBuildLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, Build>|Optional  $included
     */
    public function __construct(
        public BetaBuildLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
