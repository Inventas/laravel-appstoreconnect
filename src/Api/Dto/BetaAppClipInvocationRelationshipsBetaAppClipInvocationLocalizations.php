<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationRelationshipsBetaAppClipInvocationLocalizations
 */
class BetaAppClipInvocationRelationshipsBetaAppClipInvocationLocalizations extends SpatieData
{
    /**
     * @param  array<int, BetaAppClipInvocationRelationshipsBetaAppClipInvocationLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BetaAppClipInvocationRelationshipsBetaAppClipInvocationLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
