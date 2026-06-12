<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeOneTimeUseCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseOfferCodeOneTimeUseCodes_values_getToOneRelated
 */
class InAppPurchaseOfferCodeOneTimeUseCodesValuesGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseOfferCodeOneTimeUseCodes/{$this->id}/values";
    }

    public function __construct(
        protected string $id,
    ) {}
}
