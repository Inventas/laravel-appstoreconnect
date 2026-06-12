<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPhasedReleaseResponse
 */
class AppStoreVersionPhasedReleaseResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionPhasedRelease $data,
        public DocumentLinks $links,
    ) {}
}
