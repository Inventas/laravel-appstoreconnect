<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseSubmissionCreateRequest
 */
class InAppPurchaseSubmissionCreateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseSubmissionCreateRequestData $data,
    ) {}
}
