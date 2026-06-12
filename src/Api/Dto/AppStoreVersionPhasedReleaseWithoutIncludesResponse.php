<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPhasedReleaseWithoutIncludesResponse
 */
class AppStoreVersionPhasedReleaseWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionPhasedRelease $data,
        public DocumentLinks $links,
    ) {}
}
