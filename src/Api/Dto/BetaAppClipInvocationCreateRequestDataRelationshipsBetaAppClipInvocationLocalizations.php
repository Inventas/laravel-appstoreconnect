<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationCreateRequestDataRelationshipsBetaAppClipInvocationLocalizations
 */
class BetaAppClipInvocationCreateRequestDataRelationshipsBetaAppClipInvocationLocalizations extends SpatieData
{
    /**
     * @param  array<int, BetaAppClipInvocationCreateRequestDataRelationshipsBetaAppClipInvocationLocalizationsDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaAppClipInvocationCreateRequestDataRelationshipsBetaAppClipInvocationLocalizationsDataItem> */
        public array $data,
    ) {}
}
