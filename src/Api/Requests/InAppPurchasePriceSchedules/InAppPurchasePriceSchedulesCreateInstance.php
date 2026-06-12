<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchasePriceScheduleCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchasePriceSchedules_createInstance
 */
class InAppPurchasePriceSchedulesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchasePriceSchedules';
    }

    public function __construct(
        protected InAppPurchasePriceScheduleCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
