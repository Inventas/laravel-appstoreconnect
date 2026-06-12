<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseSubmissionResponse
 */
class InAppPurchaseSubmissionResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2>|Optional  $included
     */
    public function __construct(
        public InAppPurchaseSubmission $data,
        public DocumentLinks $links,
        /** @var array<int, InAppPurchaseV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
