<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeOneTimeUseCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionOfferCodeOneTimeUseCodes_values_getToOneRelated
 */
class SubscriptionOfferCodeOneTimeUseCodesValuesGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionOfferCodeOneTimeUseCodes/{$this->id}/values";
    }

    public function __construct(
        protected string $id,
    ) {}
}
